@extends('app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header"><h2>Edit Punishments</h2></div>
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

                {!! Form::model($punishment, ['method' => 'PATCH', 'route' => ['dom.punishment.update', $punishment->id]]) !!}
                    @include('dom/punishment/partials/_form', ['submit_text' => 'Edit Punishment'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>


@endsection
