@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Edit Timer</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model($count, ['method' => 'PATCH', 'route' => ['dom.count.update', $count->id]]) !!}
            @include('dom/count/partials/_form', ['submit_text' => 'Edit Counter'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
