<!-- Declaration Id Field -->

<!-- Datepaiment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datePaiment', 'Date Paiment:') !!}
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
