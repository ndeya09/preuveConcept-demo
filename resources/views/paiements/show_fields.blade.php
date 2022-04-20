<!-- Declaration Id Field -->

<!-- Datepaiment Field -->
<div class="col-sm-12">
    {!! Form::label('datePaiment', 'Date Paiment:') !!}
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

