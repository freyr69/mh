@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Edit Confession</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model($confession, ['method' => 'PATCH', 'route' => ['dom.confession.update', $confession->id]]) !!}
            @include('dom/confession/partials/_form', ['submit_text' => 'Edit Confession'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
