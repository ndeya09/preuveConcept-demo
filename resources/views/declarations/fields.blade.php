
<!-- Annee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annee', 'Annee:') !!}
    {!! Form::number('annee', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerocellulaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroCellulaire', 'Numéro Cellulaire:') !!}
    {!! Form::text('numeroCellulaire', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Numeroappart Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroAppart', 'Numero Appartement:') !!}
    {!! Form::number('numeroAppart', null, ['class' => 'form-control']) !!}
</div>

<!-- Codepostal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codePostal', 'Code Postal:') !!}
    {!! Form::text('codePostal', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville:') !!}
    <input class = "form-control" type="text" name="ville" value="{{ $jsondata->data->name}}">
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Datearrivcan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateArrivCan', 'Date Arrivé au Canada:') !!}
    {!! Form::text('dateArrivCan', null, ['class' => 'form-control','id'=>'dateArrivCan']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateArrivCan').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Declarationannprecedente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('declarationAnnPrecedente', 'Declaration année precedente:') !!}<br>
    <input type="radio" name="declarationAnnPrecedente" id="oui" value="oui">
    <label for="oui">Oui</label><br>
    <input type="radio" name="declarationAnnPrecedente" id="non" value="non">
    <label for="non">Non applicable - Nouvel(le) immigrant(e)</label><br>
</div>

<!-- Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupation', 'Occupation:') !!}
    <select name="occupation" class="form-control">
        <option value="etudiant">Etudiant</option>
        <option value="salarié">Salarié</option>
        <option value="travailleurAutonome">travailleur Autonome</option>
        <option value="autre">Autre</option>
    </select>
</div>

<!-- Situationmatrimoniale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situationMatrimoniale', 'Situation matrimoniale:') !!}
    <select name="situationMatrimoniale" class="form-control">
        <option value="marie">Marié</option>
        <option value="celibataire">Celibataire</option>
        <option value="autre">Autre</option>
    </select>
</div>