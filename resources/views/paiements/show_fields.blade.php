<!-- Declaration Id Field -->
<div class="col-sm-12">
    {!! Form::label('declaration_id', 'Declaration Id:') !!}
    <p>{{ $paiement->declaration_id }}</p>
</div>

<!-- Datepaiment Field -->
<div class="col-sm-12">
    {!! Form::label('datePaiment', 'Datepaiment:') !!}
    <p>{{ $paiement->datePaiment }}</p>
</div>

<!-- Montant Field -->
<div class="col-sm-12">
    {!! Form::label('montant', 'Montant:') !!}
    <p>{{ $paiement->montant }}</p>
</div>

<!-- Statut Field -->
<div class="col-sm-12">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $paiement->statut }}</p>
</div>

