<div class="table-responsive">
    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
    </div>
    @if($hinteracttions->count() == 0)
        <h3 class="text-center">Il y a {{ $hinteracttions->count() }} Interaction(s) avec une plante</h3>
        @else
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nom de Plante</th>
                    <th scope="col">Nom de la Cible</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Date</th>
                @if (request()->route()->getName() == 'userprofile.modifier_target')
                        <th scope="col">Actions</th>
                    @else
                @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($hinteracttions as $target)
                    <tr id="{{ $target->id }}">
                        <td>{{ $target->targetype->name}}</td>
                        <td>{{ $target->name }}</td>
                        <td>{{ $target->long_name }}</td>
                        <td>{{ $target->notes}}</td>

                        <td class="date-id">{{ date_create($target->created_at)->format('d-m-Y') }}</td>
                        @if (request()->route()->getName() == 'userprofile.modifier_target')
                            <td class="float-right">
                                @isset($edit)
                                    <a class="btn btn-warning btn-sm" href="{{ route('targets.show', $target->id) }}" role="button" data-toggle="tooltip" title="Modifier la plante"><i class="fas fa-edit"></i></a>
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
        {{ $hinteracttions->links() }}
    </div>
</div>
