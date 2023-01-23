    {{-- {{dd($collections)}} --}}
    @extends('dashboard.layout')

    <!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->
    {{-- {{dd($datas)}} --}}
    @section('content_dashboard')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    

    <div style='display:none' class="alert alert-danger" role="alert">
        Une erreur s'est produite
    </div>

    

    {{--Spining  --}}
    <div class=" d-flex justify-content-center">
        <img id='loader' src="{{asset('images/ajax-loader.gif')}}" style='display:none' alt="">
    </div>
    {{-- {{dd($datas[2]->data->itemType !=="attachment")}} --}}
    {{-- {{dd($datas)}} --}}
    
    @foreach ($datas as $data)
    

    @if (property_exists($data->data,'title'))
        @if ($data->data->itemType == "journalArticle")

    <form  action="/reference/autoCreate" method="post">
        @csrf
        <div>
            {{-- Delete button --}}
            {{-- le onclick sert à checker automatiquement si on clique sur annuler, il annule, si on clique sur ok proceder à l'etape suivante qui est la supression   --}}
            {{-- formaction="/reference/autoCreate/deleteItem" sert au rajout d'une autre route action sans la necessité de creer une autre balise form --}}
            <div class="d-flex justify-content-end">
                <button onclick="return confirm('Voulez-vous vraiment supprimer la référence ?');" type="submit" formaction="/reference/autoCreate/deleteItem" class="bg-white border-0" id="cross"><i class="fas fa-times fa-2x text-danger"></i></button>
            </div>
            
            {{-- Si la prorieté existe. param 1=objet ,param2=propriété recherchée dans l'objet --}}
            {{-- Title --}}
            @if (property_exists($data->data,'title'))
            <p>Titre: {{$data->data->title}}</p>
            <input type="hidden" class='title' name="title" value="{{$data->data->title}}" >
            @else
            <p>Titre not found</p>
            <input type="hidden" class='title' name="title" value="title unfound" >
            @endif

            {{--Authors  --}}

            @if(property_exists($data->data,'creators'))
            <span>Auteurs:</span>
            @foreach ($data->data->creators as $auteur)
            <span>{{ $auteur->firstName }} {{ $auteur->lastName}} |</span> 
            <input type="hidden" class='authors' name="authors" value="{{$auteur->firstName.' '.$auteur->lastName }}">
            @endforeach

            @elseif ( property_exists($data->meta,'creatorSummary'))

            <p>Auteurs: {{$data->meta->creatorSummary}}</p>
            <input type="hidden" class='authors' name="authors" value="{{$data->meta->creatorSummary}}">
            @else
            <p>Author unfound</p>
            <input type="hidden" class='authors' name="authors" value="author unfound">
            @endif
            
            {{-- Year --}}
            @if (property_exists($data->data,'date'))

            @if ($data->data->date!="")
            <p>Year: "{{$data->data->date}}"</p>
            <input type="hidden" class='year' name="year" value="{{$data->data->date}}" >
            @else
            <p>Date unfound</p>
            <input type="hidden" class='year' name="year" value="Date unfound" >
            @endif

            @elseif (property_exists($data->meta,'parsedDate'))
            <p>Year: {{$data->meta->parsedDate}}</p>
            <input type="hidden" class='year' name="year" value="{{ substr($data->meta->parsedDate, 0, -3)}}" >
            @else
            <p>Date unfound</p>
            <input type="hidden" class='year' name="year" value="Date unfound" >

            @endif

            {{-- Edition (pas retrouvé) --}}
            @if (property_exists($data->data,'publicationTitle'))
                
            <p>Edition: {{$data->data->publicationTitle}}</p>
            <input type="hidden" class='edition' name="edition" value="{{$data->data->publicationTitle}}" >

            @elseif (property_exists($data->data,'libraryCatalog'))

            <p>Edition: {{$data->data->libraryCatalog}}</p>
            <input type="hidden" class='edition' name="edition" value="{{$data->data->libraryCatalog}}" >
            @else
            <p>Edition unfound</p>
            <input type="hidden" class='edition' name="edition" value="Edition unfound" >
            @endif

            {{-- URL --}}
            @if (property_exists($data->data,'DOI') && $data->data->DOI != "")
            <p>DOI: <a href="{{ 'https://doi.org/'.$data->data->DOI}}">{{ 'https://doi.org/'.$data->data->DOI}}</a></p>
            <input type="hidden" class='url' name="url" value="https://doi.org/{{$data->data->DOI}}">

            @elseif (property_exists($data->data,'url') && $data->data->url !="" )
            <p>Url:<a href="{{$data->data->url}}" target="_blank">  {{$data->data->url}}</a></p>
            <input type="hidden" class='url' name="url" value="{{$data->data->url}}">

            @else
            <div  class="alert alert-warning" role="alert">
                URL ou DOI non trouvée. Veuillez l'insérer manuellement 
            </div>
            <input type="text" class='form-control' name="url"><br>
            
            @endif
            <input type="hidden" name="key" value="{{$data->key}}" >

            <button  type="submit" value="{{$data->key}}"
            class="btn btn-success pl-5 pr-5 bouton">Ajout à la table & Supression de zotero online</button>
            <hr>
            <hr>

    </div>
    
</form>
@endif
@endif
{{-- @endif --}}
{{-- @endif --}}
{{-- @endforeach --}}
@endforeach

{{-- <script>
    $(".bouton").on('click', function () {
        $("#loader").show();
        // console.log("coucou");
    });
</script> --}}

@endsection
{{-- @elseif (property_exists($data->data,'extra'))
            <p>Url: {{$data->data->extra}}</p>
            <input type="hidden" class='url' name="url" value="{{$data->data->extra}}" > --}}