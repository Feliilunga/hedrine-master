@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->
@section('content_title')
Recherche DCI
@endsection
@section('content_dashboard')
<div class="row">
    <div class="col-12 form-group" >
        <div class="card">
            <div class="col-sm-6">
                <input type="radio" id="index-search" name="dci-search-method" checked="checked" value="index-dci">
                <label class="m-0 text-dark" for="index-search" style="font-size:1.5em;">Recherche DCI par lettre</label>
            </div>
            <div class="card-body" id="index-list-search">
                <h5 class="card-title">

                    <ul class="nav">
                        {{--these go to DrugController with new function called filterByChar--}}
                        <li class="nav-item all">
                            <a class="nav-link listAlphabet {{isset($drug)&&$drug?'':'active-char'}}" href="{{url('drug')}}">
                                ALL
                            </a>
                        </li>
                        @foreach (range('A', 'Z') as $char)
                        <li class="nav-item" style="max-width: 3.4%">
                            <a class="nav-link {{in_array($char, $resultChars)?'listAlphabet':'disabled-char'}} {{isset($drugChar) && $drugChar===$char?"active-char":""}}" href="{{url('drug/'.$char)}}">
                                {{ $char }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </h5>
            </div>

            <div class="col-sm-6">
                <input type="radio" id="atc-class-search" name="dci-search-method" value="class-atc">
                <label class="m-0 text-dark" for="atc-class-search"  style="font-size:1.5em;">Recherche DCI par classe ATC</label>
            </div>
            <div class="card-body" id="atc-list-search" style="display: none;">
                <div>
                    <ul id="atc-dynamic-tree">
                        @foreach ($atcList as $atcLevel1)

                            <li><span class="caret">{{$atcLevel1->code}} - {{$atcLevel1->name}} ({{$atcLevel1->atc_level2s->count()}})</span>
                                <ul class="nested">
                                    @foreach ($atcLevel1->atc_level2s as $atcLevel2)

                                        <li><span class="caret">{{$atcLevel2->code}} - {{$atcLevel2->name}} ({{$atcLevel2->atc_level3s->count()}})</span>
                                            <ul class="nested">
                                                @foreach ($atcLevel2->atc_level3s as $atcLevel3)

                                                    <li><span class="caret">{{$atcLevel3->code}} - {{$atcLevel3->name}} ({{$atcLevel3->atc_level4s->count()}})</span>
                                                        <ul class="nested">
                                                            @foreach ($atcLevel3->atc_level4s as $atcLevel4)

                                                                <li><span class="caret">{{$atcLevel4->code}} - {{$atcLevel4->name}} ({{$atcLevel4->atcLevel4sDrugs->count()}}) <b><a href="{{route('drugs.details', [$atcLevel4->id, 'showAll'])}}">Détailler pour tous</a></b></span>
                                                                    <ul class="nested">
                                                                        @foreach ($atcLevel4->atcLevel4sDrugs->sortBy('code') as $drug)

                                                                            <li><b><a href="{{route('drugs.details', $drug->id )}}">{{$drug->drug_code}} - {{$drug->drugs->name}}</a></b> 
                                                                            </li>
                                                                        @endforeach
                                                                        

                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">DCI</h1>
        </div><!-- /.col -->
        <div class="card-body " style="background-color: #fff">
            <table id="drug_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> Nom </th>
                        <th>Famille</th>
                    </tr>
                </thead>
                <tbody>
                <!--
                    START COMMENT
                    Same as views/herbs/index.blade.php but for drugs
                    Using diferent variable name(drugx and drugAll and NOT drugs) to speed up things with eager loading >see doc for infos
                -->
                @foreach ($drugAll as $drugo)
                    <tr>
                        <td>
                            <a href="{{route('drugs.details', $drugo->id)}} " class="add_style" ><strong class="text-success">{{$drugo->name}}</strong></a>
                        </td>
                        <td>
                        @php 
                            $atcLevel4sDrugs = $drugo->atcLevel4sDrugs;               
                                if (isset($atcLevel4sDrugs)) {
                                    foreach ($atcLevel4sDrugs as $lvl1) {
                                        
                                        $atc_level4 = $lvl1->atc_level4;
                                        if (isset($atc_level4)) {
                                            $atc_level3 = $atc_level4->atc_level3;
                                            if (isset($atc_level3)) {
                                                $atc_level2 = $atc_level3->atc_level2;
                                                if (isset($atc_level2)) {
                                                    $atc_level1 = $atc_level2->atc_level1;
                                                    if (isset($atc_level1)) {
                                                        echo $atc_level1->code."- ".$atc_level1->name;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }            
                        @endphp
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    /* Remove default bullets */
    ul, #atc-dynamic-tree {
        list-style-type: none;
    }

    /* Remove margins and padding from the parent ul */
    #atc-dynamic-tree {
        margin: 0;
        padding: 0;
    }

    /* Style the caret/arrow */
    .caret {
        cursor: pointer;
        user-select: none; /* Prevent text selection */
    }

    /* Create the caret/arrow with a unicode, and style it */
    .caret::before {
        content: "\002B";
        color: blue;
        display: inline-block;
        font-weight: bold;
        margin-right: 6px;
    }

    /* Rotate the caret/arrow icon when clicked on (using JavaScript) */
    .caret-down::before {
        content: "\002D";
        color: red;
    }

    /* Hide the nested list */
    .nested {
        display: none;
    }

    /* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
    .active {
        display: block;
    }
</style>
@endsection

@section('dashboard-js')
    <script>
        $(document).ready(function() {

            $('#drug_table').DataTable({
                "paging": true,
                "processing": true,
                "lengthChange": false,
                "searching": true,
                "deferRender": 15,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language":
                {
                    "url": '//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json'
                }
            });

            $('input[type=radio][name=dci-search-method]').on('change', function() {
                if(this.value === 'class-atc'){
                    $('#atc-list-search').show();
                    $('#index-list-search').hide();
                }
                else {
                    $('#atc-list-search').hide();
                    $('#index-list-search').show();
                }

            });

        });
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            console.log(toggler);
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
    </script>
@endsection

@section('alfab-js')
	<script>
		$(function() {
			$(document).ready(function() {
				$('#listerByAlphabetic thead tr').clone(true).appendTo( '#listerByAlphabetic thead' );
				$('#listerByAlphabetic thead tr:eq(1) th').each( function (i) {
					var title = $(this).text();
					$(this).html( '<input type="text" placeholder="Search '+title+'" />' );

					$( 'input', this ).on( 'keyup change', function () {
						if ( table.column(i).search() !== this.value ) {
							table
								.column(i)
								.search( this.value )
								.draw();
						}
					} );
				} );

				var table = $('#listerByAlphabetic').DataTable( {
					orderCellsTop: true,
					fixedHeader: true
				} );
			} );
		})
    </script>
@endsection
