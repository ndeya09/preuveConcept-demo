<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Annee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annee', 'Annee:') !!}
    {!! Form::number('annee', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerocellulaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroCellulaire', 'Numerocellulaire:') !!}
    {!! Form::text('numeroCellulaire', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Numeroappart Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroAppart', 'Numeroappart:') !!}
    {!! Form::number('numeroAppart', null, ['class' => 'form-control']) !!}
</div>

<!-- Codepostal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codePostal', 'Codepostal:') !!}
    {!! Form::text('codePostal', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville:') !!}
    {!! Form::text('ville', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Datearrivcan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateArrivCan', 'Datearrivcan:') !!}
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
    {!! Form::label('declarationAnnPrecedente', 'Declarationannprecedente:') !!}
    {!! Form::text('declarationAnnPrecedente', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupation', 'Occupation:') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Situationmatrimoniale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situationMatrimoniale', 'Situationmatrimoniale:') !!}
    {!! Form::text('situationMatrimoniale', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>