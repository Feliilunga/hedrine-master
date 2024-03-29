@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item awesome-font link">
                        <a style="color:green;font-weight:bold;font-size:20px" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item awesome-font link">
                            <a style="color:green;font-weight:bold;font-size:20px" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center" id="register">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header bg-success awesome-font">{{ __('Register') }}</h4>

                <div class="card-body">
                    <div class="alert alert-info fade show text-danger">
                        <strong><i class="fa fa-info-circle info text-danger" id="required-msg"></i></strong> Champs requis 
                        {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
                    </div>
                    <form method="GET" action="{{ route('register') }}">
                       

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('firstname') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="team" class="col-md-4 col-form-label text-md-right">{{ __('team') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="team" type="text"  class="form-control @error('team') is-invalid @enderror" name="team" value="{{ old('team') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel1" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone: ') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ old('tel1') }}"  autocomplete="tel1" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,11}">
                                <span id="doubleMail" class="text-danger"></span>
                                <span id="emailerrorspan" class="text-danger"><span>  {{--ne sera utile que si l'email ne passera pas MA validation --}}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span id="passwordserrorspan" class="text-danger"><span>  {{--ne sera utile que si les mdp ne passeront pas MA validation --}}
                                
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-1! m-5 p-2 shadow bginfo">
                                <div class="m-2">
                                    
                                    <strong class="fs-6 text"> 
                                            <p class="text-decoration-underline fw-bold">
                                                <i class="fa fa-info-circle info text-danger" id="required-msg"></i>
                                                IMPORTANT : R.G.P.D. 
                                            </p> 
                                        &laquo; 
                                        L'Université libre de Bruxelles traite vos données afin de permettre votre inscription sur ce site. Pour en savoir plus sur la manière dont vos données personnelles sont traitées et conservées ainsi que pour vérifier vos droits, <b>veuillez lire les conditions RGPD <b>et les accepter en cochant la petite case que vous trouverez dans la popup qui s'ouvrira</b> (sans quoi vous ne pourrez pas vous enregistrer). 
                                        &raquo;
                                    </strong>
                                    <br/>
                                        <button OnClick="return false;" data-toggle="modal" data-target="#exampleModal" class="d-block my-4 p-2 rounded mx-auto bg-success text-light" id="rgpdbtn">Voir les conditions RGPD</button>
                                    {{-- Veuillez cliquer <a class="text-primary text-underline" data-toggle="modal" data-target="#exampleModal">ici</a>. --}}
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h3 class="modal-title" id="exampleModalLabel">
                                                    <img src="{{ asset('images/hedrine6b.png') }}" class="img-fluid" alt="Hedrine - logo">
                                                </h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body scroll text-dark">
                                                <h4 class="text-success text-center">RGPD : Hedrine</h4>
                                                <hr>
                                                <strong class="text-info"><i class="fa fa-info-circle"></i> Veuillez faire défiler vers le bas afin de lire attentivement et pour cocher la case d'acceptation des conditions mentionnées dans cette fenêtre :</strong>
                                                <hr>
                                                @include('auth.terms')
                                                <hr>
                                                <div class="condtions bginfo shadow">
                                                    <!-- Button trigger modal -->
                                                    <label for="check-me" id="checkboxContent">
                                                            <p class="text-center m-1">&rarr; <input type="checkbox" name="RGPD" id="check-me" class="@error('RGPD') is-invalid @enderror" required value="1"> &larr; </p>
                                                            <p class="text-center m-1">
                                                                En cochant la case ci-dessus, j’accepte la politique de confidentialité de ce site et je donne mon accord pour le traitement de mes données en vue de la bonne utilisaiton de ce site.
                                                            </p>
                                                        </label>
                                                    @error('RGPD')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="modal-footer m-footer bg-light">
                                                <input type="button" class="btn btn-outline-danger" data-dismiss="modal" value="Je refuse">
                                                <i class="far fa-smile-wink"></i>
                                                <input type="button" class="btn btn-outline-success" data-dismiss="modal" value="J'accepte" id="accept" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="test"> <!-- id test? //dteu -->
                            <div class="col-10 col-sm-12 mx-auto d-flex justify-content-center">
                                <small> </small>
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mx-auto text-center my-4">
                                <button type="submit" id="registerBtn" class="btn btn-outline-success register">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


@endsection


