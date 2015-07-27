@extends('app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header"><h2>Create Punishment</h2></div>
            <div class="card-body card-padding">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::model(new Mistress\Punishment, ['route' => ['dom.punishment.store']]) !!}
                    @include('dom/punishment/partials/_form', ['submit_text' => 'Create Punishment'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
