@extends('layouts.user')

@section('content_dashboard')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Plantes actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $herbActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Plantes en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $herbsAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Plantes à modifier</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $herbToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DCI actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drugsActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">DCI en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drugsAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">DCI à modifier</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drugsToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Target (Cible) actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $targetsActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Target (Cible) en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $targetsAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Target (Cible) à modifier </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $targetsToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hinteractions Targets actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hinteractionsActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Hinteractions Targets en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hinteractionsAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hinteractions Targets à modifier</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hinteractionsToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dinteractions Targets actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dinteractionsActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Dinteractions Targets en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dinteractionsAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Dinteractions Targets à modifier</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dinteractionsToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">References actives </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $referencesActivesCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hiking fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">References en ettente </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $referencesAttentsCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">References à modifier</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $referencesToModifierCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
@endsection
