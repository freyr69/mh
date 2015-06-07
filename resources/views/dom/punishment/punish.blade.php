@extends('app')

@section('content')

<div class="row">
    <div class="small-12 columns">
        <h2 class="subheader">Assign a Punishment</h2>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">
        {!! Form::open() !!}

        <div class="row">
            <div class="large-12 columns">
                <label>
                    Select Punishment:
                    {!! Form::select('punishment', $punishments) !!}
                </label>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                Severity:
                {!! Form::select('severity', ['1','2','3','4','5','6','7','8','9','10']) !!}
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                Notes:
                {!! Form::textarea('notes') !!}
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button btn-primary" value="Add Punishment">
                <a class="button secondary" href="{{ url('dom/') }}">Cancel</a>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>


@endsection
