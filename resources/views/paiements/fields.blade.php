<!-- Declaration Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('declaration_id', 'Declaration Id:') !!}
    {!! Form::number('declaration_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Datepaiment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datePaiment', 'Datepaiment:') !!}
    {!! Form::text('datePaiment', null, ['class' => 'form-control','id'=>'datePaiment']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#datePaiment').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Montant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('montant', 'Montant:') !!}
    {!! Form::number('montant', null, ['class' => 'form-control']) !!}
</div>

<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::text('statut', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>