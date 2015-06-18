@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Add Counter</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model(new Mistress\Count, ['route' => ['dom.count.store']]) !!}
            @include('dom/count/partials/_form', ['submit_text' => 'Create Counter'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
