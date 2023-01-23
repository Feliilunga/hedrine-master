@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
    @if((Route::currentRouteName() === 'drug.index') && (auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3) )
    <a class="btn btn-light" href="{{ route('drug.create') }}" role="button">Créer un nouveau médicament</a>
    @endif
</div>

<div class="col-12">
    <div class="card-body " style="background-color: #fff">
        <table id="example2" class="table table-striped table-bordered table-sm">
            <thead>
                <tr class="text-center">
                    <th> Nom </th>
                    <th> Famille </th>
                    <th> AtcLevel </th>
                    <th> Editeur </th>
                    @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
                    <th> Action </th>
                    @endif

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
@endsection

@section('dashboard-js')
<script type="text/javascript">
    $(document).ready(function() {

        $('#example2').DataTable({
            //Mohammed : correction de la recheche et changement d 'id pour le tableau
            ajax: {
                url: '{{ url("/allDrugs") }}',
                type: 'GET',
                data: function(data) {
                    data.params = {
                        sac: "helo"
                        
                    }
                }
            },
            "paging": true,
                "processing": true,
                "lengthChange": false,
                "searching": true,
                "deferRender": 15,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
            },
            buttons: true,
            "lengthChange": false,
            "pageLength": 15,
            searching: true,
            scrollCollapse: true,
            columns: [
                
                {
                    data: "name",
                    name: 'name',
                    render: function(data, type, row) {
                        return "<a href='drug/details_drug/" + row.id + "'>" + row.name + "</a>"
                        
                    }
                    
                    
                },
                {
                    data: "atc_level4s_drugs[0].atc_level4.atc_level3.atc_level2.atc_level1.name",
                    name:  "atc_level4s_drugs[0].atc_level4.atc_level3.atc_level2.atc_level1.name",
                    defaultContent: "",
                    render: function(data, type, row) {
                        return data = data.replaceAll('0', ' - ');
                        
                    }                    
                    // render: function(data, type, row) {
                        
                    //     // console.log(data);
                    //     var fami;
                    //     var fami3;
                    //     var fam = row.atc_level4s_drugs;
                       
                        
                    //    console.log(data);
                        
                    //     if(fam){
                    //         // console.log('test');
                    //         for(let i=0; i<fam.length; i++){
                                
                    //                 var fami = fam[i].atc_level4;
                    //                 //console.log(fami);
                    //                 if(fami){
                    //                     var fami1 = fami.atc_level3;
                    //                     if(fami1){    
                    //                         var fami2 = fami1.atc_level2;
                    //                         if(fami2){
                    //                             var fami3 = fami2.atc_level1;
                    //                             //console.log(fami3);
                    //                             //console.log(fami);
                    //                                 // for(let j=0; j<fami.length; j++){
                    //                             if(fami3.name){
                    //                                 return  fami3.name;
                    //                                 // console.log(fami3);
                     
                    //                             }
                    //                         }    
                    //                     }    
                    //                 }
                                
                                
                                
                                   
                    //         }
                    //     }    
                    //     //console.log(fami3);
                     
                    // } 
                },
                {
                    data: "atc_level4s_drugs[0].drug_code",
                    name: 'code',
                    defaultContent: "",
                    render: function(data, type, row) {
                        
                        let resp = data.match(/(.{1,8})/g);
                        let result = "";
                        console.log(resp); 
                        if(resp != null){
                            resp.forEach((e,i) => {
                                // dteu 24/08/2021 : modif du 30/06 ( - entre les codes ATC pour les DCI)
                                if(e.length > 7){
                                    e = e.substring(0, 7);
                                }

                                if(i != resp.length -1){
                                    result += e + " - ";
                                }else{
                                    result += e;
                                }
                                
                            });
                        }
                        return result;                   
                    }  
                    

                },
                {
                    data: "user.name",
                    name: 'user.name',
                    defaultContent: ""
                }, 
                {
                    data: "action",
                    name: 'action',
                    render: function(data, type, row) {
                        "@if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))"
                        return "<a class='btn btn-outline-success text align-self-center p-2' role='button' href='drug/edit/" + row.id + "'>" + 'edit' + "</a>"
                        "@endif"
                    }
                }


            ]

        });
    });
</script>
@endsection
