@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Edit Punishments</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model(new Mistress\Punishment, ['route' => ['dom.punishment.store']]) !!}
            @include('dom/punishment/partials/_form', ['submit_text' => 'Create Punishment'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
