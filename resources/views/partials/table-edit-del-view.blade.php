<div class="table-responsive">
    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
    </div>
    @if($druggs->count() == 0)
        <h3 class="text-center">Il y a {{ $druggs->count() }} medicament(s)</h3>
        @else
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Famille</th>
                    <th scope="col">Route</th>
                    <th scope="col">Atc Level</th>
                    <th scope="col">Date</th>
                @if (request()->route()->getName() == 'userprofile.modifier_dci')
                        <th scope="col">Actions</th>
                    @else
                @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($druggs as $drug)
                    <tr id="{{ $drug->id }}">
                        <td>{{ $drug->name }}</td>
                        <td>{{ $drug->drug_family->name }}</td>
                        <td>{{ $drug->routes->name }}</td>
                        <td>{{ $drug->atc->name }}</td>
                        <td class="date-id">{{ date_create($drug->created_at)->format('d-m-Y') }}</td>
                        @if (request()->route()->getName() == 'userprofile.modifier_dci')
                            <td class="float-right">
                                @isset($edit)
                                    <a class="btn btn-warning btn-sm" href="{{ route('drugs.show', $drug->id) }}" role="button" data-toggle="tooltip" title="Modifier la plante"><i class="fas fa-edit"></i></a>
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
        {{ $druggs->links() }}
    </div>
</div>
