@extends('app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header"><h2>Assign a Punishment</h2></div>
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

                {!! Form::model(new Mistress\AssignedPunishment, ['route' => ['dom.assigned_punishment.store']]) !!}


                <div class="form-group fg-float">
                    <div class="fg-line">
                        {!! Form::select('punishment', $punishments, null, array('class' => 'form-control fg-input')) !!}
                    </div>
                    {!! Form::label('punishment', 'Select Punishment', array('class' => 'fg-label')) !!}   
                </div>


                <div class="form-group fg-float">
                    <div class="fg-line">
                        {!! Form::select('severity', ['1','2','3','4','5','6','7','8','9','10'], null, array('class' => 'form-control fg-input')) !!}
                    </div>
                    {!! Form::label('severity', 'Severity', array('class' => 'fg-label')) !!}   
                </div>

                <div class="form-group fg-float">
                    <div class="fg-line">
                        {!! Form::textarea('notes', null, ['class' => 'form-control fg-input']) !!}
                    </div>
                    {!! Form::label('notes', 'Notes', array('class' => 'fg-label')) !!}   
                </div>


                <div class="form-group">
                    {!! Form::submit('Add Punishment', array('class' => 'btn btn-primary')) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection
