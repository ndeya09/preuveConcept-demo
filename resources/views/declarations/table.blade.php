<div class="table-responsive">
    <table class="table" id="declarations-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>Annee</th>
        <th>Numerocellulaire</th>
        <th>Numeroappart</th>
        <th>Codepostal</th>
        <th>Ville</th>
        <th>Province</th>
        <th>Datearrivcan</th>
        <th>Declarationannprecedente</th>
        <th>Occupation</th>
        <th>Situationmatrimoniale</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($declarations as $declaration)
            <tr>
                <td>{{ $declaration->user_id }}</td>
            <td>{{ $declaration->annee }}</td>
            <td>{{ $declaration->numeroCellulaire }}</td>
            <td>{{ $declaration->numeroAppart }}</td>
            <td>{{ $declaration->codePostal }}</td>
            <td>{{ $declaration->ville }}</td>
            <td>{{ $declaration->province }}</td>
            <td>{{ $declaration->dateArrivCan }}</td>
            <td>{{ $declaration->declarationAnnPrecedente }}</td>
            <td>{{ $declaration->occupation }}</td>
            <td>{{ $declaration->situationMatrimoniale }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['declarations.destroy', $declaration->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('declarations.show', [$declaration->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('declarations.edit', [$declaration->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
