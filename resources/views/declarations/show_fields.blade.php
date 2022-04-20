<!-- User Id Field -->


<!-- Annee Field -->
<div class="col-sm-12">
    {!! Form::label('annee', 'Annee:') !!}
    <p>{{ $declaration->annee }}</p>
</div>

<!-- Numerocellulaire Field -->
<div class="col-sm-12">
    {!! Form::label('numeroCellulaire', 'Numero Cellulaire:') !!}
    <p>{{ $declaration->numeroCellulaire }}</p>
</div>

<!-- Numeroappart Field -->
<div class="col-sm-12">
    {!! Form::label('numeroAppart', 'Numero Appartement:') !!}
    <p>{{ $declaration->numeroAppart }}</p>
</div>

<!-- Codepostal Field -->
<div class="col-sm-12">
    {!! Form::label('codePostal', 'Code Postal:') !!}
    <p>{{ $declaration->codePostal }}</p>
</div>

<!-- Ville Field -->
<div class="col-sm-12">
    {!! Form::label('ville', 'Ville:') !!}
    <p>{{ $declaration->ville }}</p>
</div>

<!-- Province Field -->
<div class="col-sm-12">
    {!! Form::label('province', 'Province:') !!}
    <p>{{ $declaration->province }}</p>
</div>

<!-- Datearrivcan Field -->
<div class="col-sm-12">
    {!! Form::label('dateArrivCan', 'Date arrivée:') !!}
    <p>{{ $declaration->dateArrivCan }}</p>
</div>

<!-- Declarationannprecedente Field -->
<div class="col-sm-12">
    {!! Form::label('declarationAnnPrecedente', 'Declaration année precedente:') !!}
    <p>{{ $declaration->declarationAnnPrecedente }}</p>
</div>

<!-- Occupation Field -->
<div class="col-sm-12">
    {!! Form::label('occupation', 'Occupation:') !!}
    <p>{{ $declaration->occupation }}</p>
</div>

<!-- Situationmatrimoniale Field -->
<div class="col-sm-12">
    {!! Form::label('situationMatrimoniale', 'Situation Matrimoniale:') !!}
    <p>{{ $declaration->situationMatrimoniale }}</p>
</div>

