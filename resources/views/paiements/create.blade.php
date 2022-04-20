@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Faire un paiment</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'paiements.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('paiements.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('payer', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('paiements.index') }}" class="btn btn-default">Annuler le paiment</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
