<div class="table-responsive">
    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
    </div>
    @if($herbes->count() == 0)
        <h3 class="text-center">Il y a {{ $herbes->count() }} plante(s) </h3>
        @else
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Sciname</th>
                    <th scope="col">Date</th>
                @if (request()->route()->getName() == 'userprofile.modifier')
                        <th scope="col">Actions</th>
                    @else
                @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($herbes as $herb)
                    <tr id="{{ $herb->id }}">
                        <td>{{ $herb->name }}</td>
                        <td>{{ $herb->sciname }}</td>
                        <td class="date-id">{{ date_create($herb->created_at)->format('d-m-Y') }}</td>
                        @if (request()->route()->getName() == 'userprofile.modifier')
                            <td class="float-right">
                                @isset($edit)
                                    <a class="btn btn-warning btn-sm" href="{{ route('herbs.show', $herb->id) }}" role="button" data-toggle="tooltip" title="Modifier la plante"><i class="fas fa-edit"></i></a>
                                @endisset

                                <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>


                            </td>

                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

<div class="d-flex">
    <div class="mx-auto">
        {{ $herbes->links() }}
    </div>
</div>
