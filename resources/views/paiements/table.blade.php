<div class="table-responsive">
    <table class="table" id="paiements-table">
        <thead>
        <tr>
        <th>Date Paiment</th>
        <th>Montant</th>
        <th>Statut</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($paiements as $paiement)
            <tr>
                <td>{{ $paiement->declaration_id }}</td>
            <td>{{ $paiement->datePaiment }}</td>
            <td>{{ $paiement->montant }}</td>
            <td>{{ $paiement->statut }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['paiements.destroy', $paiement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('paiements.show', [$paiement->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('paiements.edit', [$paiement->id]) }}"
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
