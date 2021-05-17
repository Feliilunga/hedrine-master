@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-12 col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 col-xl-3 mx-auto">
                        <a href="herb">
                            <img src="{{ asset('images/plantes.jpg') }}" alt="Plants" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6  col-sm-6 col-md-6  col-xl-5 offset-xl-1 ">
                        <a href="hinteractions/hdi">
                            <img src="{{ asset('images/interaction_gche.jpg') }}" alt="Drugs" class="img-fluid" id="fleche_gauche">
                        </a>
                    </div>
                    <div class="col-6 col-sm-6  col-md-6  col-xl-4 ">
                        <a href="hinteractions/hti">
                            <img src="{{ asset('images/interaction_drte.jpg') }}" alt="Targets" class="img-fluid" id="fleche_droite">
                        </a>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-6 col-sm-3 col-md-3  col-lg-4 col-xl-4">
                        <a href="drug">
                            <img src="{{asset('images/dci.jpg')}}" alt="" class="img-fluid" style="max-width: 70%;">
                        </a>
                    </div>
                    <div class=" col-6 col-sm-3 offset-sm-6 col-md-3 offset-md-6 col-lg-4 col-xl-3 offset-xl-4 ">
                        <a href="target">
                            <img src="{{ asset('images/mecanismes_hl.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function()
        {
            $('#fleche_gauche').on({
                mouseenter: function () {
                    $(this).attr('src', "{{ asset('images/interaction_gche_hl.jpg') }}");  
                    
                },
                mouseleave: function () {
                    $(this).attr('src', "{{ asset('images/interaction_gche.jpg') }}");  
                }            
            });
            $('#fleche_droite').on({
                mouseenter: function () {
                    $(this).attr('src', "{{ asset('images/interaction_drte_hl.jpg') }}");  
                    
                },
                mouseleave: function () {
                    $(this).attr('src', "{{ asset('images/interaction_drte.jpg') }}");  
                }            
            });
        });
    </script>
@endsection