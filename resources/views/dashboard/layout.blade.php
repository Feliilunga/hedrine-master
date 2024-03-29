<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hedrine | ULB</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/jqvmap/jqvmap.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/adminlte/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/hedrine.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/daterangepicker/daterangepicker.css')}}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/summernote/summernote-bs4.css')}}">


    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    


</head>

<body class="hold-transition sidebar-mini layout-fixed" id="layout">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block" style="margin-bottom: 47px">
                    <a href="{{ route('home') }}" class="nav-link">
                        <img class="img-fluid taille" src="{{ asset('images/hedrine_petit.png') }}" alt="Logo Hedrine">
                    </a>
                </li>
            </ul>

            <!-- Right navbar links for All -->
            <ul class="navbar-nav ml-auto">
                {{--new users--}}
                @if((auth()->user()->role_id == 1 ))
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="badge badge-info navbar-badge" style="font-size: 15.5px">{{ $newUsersCount }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <h4 class="dropdown-item dropdown-header text-info"><i class="fas fa-users mr-2"></i> {{ $newUsersCount }} New Users requests</h4>
                        <div class="dropdown-divider"></div>
                        @forelse($mostRecentUsers as $u)
                        <div class="card text-center">
                            <div class="text-dark d-flex justify-content-around new-user" style="padding: 5px 0">
                                <strong class="text-left">
                                    <a href="{{route('newSingleUser.request', $u->id)}}" title="See user request" class="text-dark view"><i class="fas fa-user mr-2"></i>{{ $u->name }} {{$u->firstname}} <i class="fas fa-eye"></i></a>
                                </strong>
                                <small class="text-right text-info">{{Carbon\Carbon::parse($u->email_verified_at)->diffForHumans()}}</small>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-around ">
                                <a href="{{route('denyingUser', $u->id)}}" title="deny user request" role="button" class="accept"><i class="far fa-thumbs-down text-danger"></i></a>
                                <a href="{{route('activeUser', $u->id)}}" title="accept user request" role="button" class="accept"><i class="far fa-thumbs-up text-success"></i></a>
                            </div>
                        </div>

                        @empty
                        <div class="alert text-warning" role="alert">No users requests for the moment</div>
                        @endforelse
                        <div class="dropdown-divider"></div>
                        <a href="{{route('newUser.request')}}" class="dropdown-item dropdown-footer" title="see all user requests">See All User requests</a>
                    </div>
                </li>
                @endif
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments fa-2x"></i>
                        <span class="badge badge-info navbar-badge" style="font-size: 15px">{{ $posts->count() }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        @if((auth()->user()->role_id == 1 )||(auth()->user()->role_id == 2 ))
                        <div class="row text-center" style="padding-left:44px;padding-top:10px;padding-bottom:10px;">
                            <a class="btn btn-success" href="{{ route('post.create') }}" role="button">Créer un nouveau post</a>
                        </div>
                        <div class="dropdown-divider"></div>
                        @endif
                        @foreach ($posts as $post)
                        <a href="{{route('post.details', $post->id)}}" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body @if ($post->important == 1) important @endif">

                                    <h3 class="dropdown-item-title">
                                        {{ $post->title }}
                                        @if ($post->important == 1)
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        @endif
                                    </h3>
                                    <p class="text-sm">{{ Str::limit($post->body, 35) }}</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('post.index') }}" class="dropdown-item dropdown-footer">See All Posts</a>
                    </div>
                </li>
                @if((auth()->user()->role_id == 1 )||(auth()->user()->role_id == 2 ))
                <!-- Notifications Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell fa-2x"></i>

                        <span class="badge badge-info navbar-badge" style="font-size: 15.5px">{{ $allCounter }}</span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.herbs') }}" class="dropdown-item">
                            <i class="fas fa-seedling mr-2" style="color: seagreen"></i> {{$noValidHerbsCounter}}
                            new Herbs
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.drugs') }}" class="dropdown-item">
                            <i class="fas fa-capsules mr-2" style="color:#7d041e"></i> {{ $noValidDrugs->count() }}
                            new Drugs
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.drugs') }}" class="dropdown-item">
                        <i class="fas fa-capsules mr-2" style="color:#7d041e"></i> {{$noValidModifDrugs}}
                            new modification Drug
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.targets') }}" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> {{ $noValidTargets->count() }}

                            new Targets


                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.hinteractiontarget') }}" class="dropdown-item">
                            <i class="fas fa-sync mr-1" style="color: seagreen"></i> {{$noValidHinteractions->count()}}
                            new Hinteraction Target

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.dinteractiontarget') }}" class="dropdown-item">
                            <i class="fas fa-sync  mr-1" style="color:red"></i> {{$noValidDinteractions->count()}}
                            new Dinteraction Target
                        </a>
                        
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.dinteractiontarget') }}" class="dropdown-item">
                            <i class="fas fa-sync  mr-1" style="color:red"></i> {{$noValidModifDinteractions}}
                            new modification Dinteraction Target
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.references') }}" class="dropdown-item">
                            <i class="fas fa-book-medical mr-1" style="color: seagreen"></i> {{$noValidReferences->count()}}

                            new References


                        </a>
                        <div class="dropdown-divider"></div>


                    </div>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-sm-inline-block">
                    <img class="img-fluid" src="{{ asset('images/Plant-icon_32.png') }}" alt="plante">
                </li>
                <li class="nav-item d-sm-inline-block">{{ $validatedHerb->count() }}</li>
                &nbsp; &nbsp;
                <li class="nav-item d-sm-inline-block"><img class="img-fluid" src="{{ asset('images/pills-5-icon_32.png') }}" alt="drugs">
                </li>
                <li class="nav-item d-sm-inline-block">{{ $validatedDrug->count() }}</li>
                &nbsp; &nbsp;
                <li class="nav-item d-sm-inline-block"><img class="img-fluid" src="{{ asset('images/Refresh-bicolor-icon_32.png') }}" alt="target">
                </li>
                <li class="nav-item d-sm-inline-block">{{ $validatedHinteractions->count() + $validatedDinteractions->count()}}</li>
                &nbsp; &nbsp;
                <li class="nav-item d-sm-inline-block"><img class="img-fluid" src="{{ asset('images/Document-icon_32.png') }}" alt="reference">
                </li>
                <li class="nav-item d-sm-inline-block">{{ $references->count() }}</li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button class="btn btn-light" style="border: 0; border-bottom: 1px solid green" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-circle fa-2x"></i>
                        <br>
                        <b>{{ auth()->user()->firstname }} {{ auth()->user()->name }} ({{ auth()->user()->roles->name }})</b>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a class="dropdown-item text-danger" href="{{ action('SessionController@destroy') }}">
                            <i class="left fas fa-sign-out-alt"></i>
                            Se déconnecter
                        </a>
                        {{-- DD 28 juin 2020 : je mets en commentaire la désinscription dans le menu du user car je l'ai déplacé dansle sidebar de gauche --}}
                        {{-- @if(\Illuminate\Support\Facades\Auth::user()->role_id === 4)
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unsubscribeModal"><i style="color: red" class="left fas fa-times-circle"></i> Désinscription</a>
                    @endif --}}
                        @if(auth()->user()->role_id == 3)
                        <a class="dropdown-item" href="{{ route('userprofile.index') }}">
                            <i class="left fas fa-user-cog"></i>
                            Mon compte
                        </a>
                        @endif
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Modal de la désinscription-->
        <div class="modal fade" id="unsubscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header  bg-danger ">
                        <strong class="modal-titletext-light" id="exampleModalLabel"> Attention !</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <b class="text-danger">Cette opération sera irréversible : Votre compte et vos données seront DÉFINITIVEMENT supprimés</b>
                        <strong>Voulez-vous vraiment continuer ?</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                        <a href="{{route('unsubscribe')}}" id="unsubscribe" style="border: 0; border-bottom: 1px solid red" class="btn btn-outline-danger">
                            Oui, je confirme ma désinscription !
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-secondary sidenav elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <br />
                <div class="text-center">
                    <a href="https://www.ulb.be" class="d-block">
                        <img src="{{ asset('images/ulb-icon.png') }}" class="img-circle" alt="Logo ULB">
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2 sidebar-nav">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active" style="background-color: #3a64a5">
                                <i class="nav-icon fas fa-search-plus"></i>
                                <p>
                                    RECHERCHE
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('hinteractions.hdi')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Plantes <span><i class="fas fa-arrows-alt-h fa-lg"></i></span> DCI</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('hinteractions.hti')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Plantes <span><i class="fas fa-arrows-alt-h fa-lg"></i></span> Mécanismes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link " style="background-color: #3a64a5; color: white">
                                <i class="nav-icon fas fa-compress-arrows-alt"></i>
                                <p>
                                    INDEX
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('herbs.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Plantes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('drugs.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DCI</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('targets.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cas Rapporté et Mécanisme</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if ((auth()->user()->role_id == 1 )||(auth()->user()->role_id == 2) ||(auth()->user()->role_id == 3 ))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link" style="background-color:#3a64a5; color: white">
                                <i class="fas fa-database nav-icon"></i>
                                <p>
                                    Gerer les données
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('newHerbTarget')}}" class="nav-link text-dark">
                                        <p> <i class="fas fa-seedling mr-2 text-dark"></i> New Hinteraction Target</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('newDrugTarget')}}" class="nav-link text-dark">
                                        <p> <i class="fas fa-capsules mr-2 text-dark"></i> New Dinteraction Target</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('drug.index')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Drugs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('herb.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Herbs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('target.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Targets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('reference.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Références</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dinteraction.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Interaction Drugs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hinteraction.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Interaction Plantes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (auth()->user()->role_id == 1)
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link" style="background-color:#3a64a5; color: white">
                                <i class="fas fa-unlock-alt nav-icon"></i>
                                <p>
                                    ADMIN
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('post.index') }}" class="nav-link text-dark">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>New Post</p>
                                    </a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a href="{{ route('effect.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Actions</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="{{route('drug_family.index')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Drugs Families</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="{{route('herb_form.index')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Herbs Forms</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('force.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Forces</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('role.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('target_type.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Target Types</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('pending_user.index')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Pending Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if ((auth()->user()->role_id == 4 ))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link" style="background-color:red;">
                                <i class="left fas fa-times-circle"></i>
                                <p>
                                    DESINSCRIPTON
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#unsubscribeModal"><i style="color: red" class="left fas fa-times-circle"></i> Supprimer mon compte</a>


                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background: #fff">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ $title }}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content_dashboard')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong> 2020 - {{date('Y')}} <a href="https://www.ulb.be">Hedrine-ULB</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">

            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $(document).ready(function() {
            $('#MybtnModal').click(function() {
                $('#Mymodal').modal('show');
            });
        });
    </script>


    <!-- Bootstrap 4 -->
    <script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->

    <!-- ChartJS -->
    <script src="{{ asset('/adminlte/plugins/chart.js/Chart.min.js') }}"></script>


    <!-- overlayScrollbars -->
    <script src="{{ asset('/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

   <!-- graphique dci/plantes d3 Mohammed Chairi B. -->
    <script src="https://d3js.org/d3.v3.js"></script>
    <script src="{{ asset('/js/d3.stretched.chord.js')}}"></script>
    <script src="{{ asset('/js/d3.layout.chord.sort.js')}}"></script>



    
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/adminlte/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('/adminlte/dist/js/toolip.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>



    <!-- JP Ajout css et js pour le crud des herbs avec ses forms -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- <script src="{{ asset('/js/hinteraction_targetEdit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/targetEdit.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('/js/manage.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/advancedSearch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/dinteraction_targetEdit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/hinteraction_targetEdit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/referenceEdit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/advancedSearchMechanism.js') }}" type="text/javascript"></script>

    {{-- <script src="{{ asset('/js/herbJson.js') }}" type="text/javascript"></script> --}}
    {{-- DD/Thierry 30 juin on met ce code pour appeler le script js se trouvant dans index.blade.php ==> resources/views/interaction/index.blade.php
    on met dans un yield autrement il va se lancer partout  --}}
    @yield('getdrugs');
    @yield('getherbs');
    @yield('getmechanisms');
    @yield('resultat');


    <script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>

    @include('sweetalert::alert')
    @include('cookieConsent::index')

    <!-- Recaptha -->


    @yield('script')
    @yield('dashboard-js')


</body>

</html>
