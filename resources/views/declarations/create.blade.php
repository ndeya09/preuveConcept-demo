@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Remplir le formulaire pour soumettre votre déclaration de revenus</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'declarations.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('declarations.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Confirmer', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('declarations.index') }}" class="btn btn-default">Annuler</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
