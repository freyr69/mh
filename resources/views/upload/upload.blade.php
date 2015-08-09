@extends('app')

@section('content')

    <div class="block-header">
        <h2>Upload</h2>
    </div>

    <div class="card">
        <div>
            @if(Session::has('success'))
            <div class='alert-box alert-success'>
                <h2>{!! Session::get('success') !!}</h2>
            </div>
            @endif
            
            <div class="secure">Upload Form</div>
            {!! Form::open(array('url' => 'upload','method' => 'POST', 'files' => true)) !!}
            <div class='control-group'>
                <div class='controls'>
                    {!! Form::file('image') !!}
                    <p class='errors'>{!! $errors->first('image')!!}</p>
                    	@if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                </div>
            </div>
            
            <div id="success"></div>
            
            {!! Form::submit('Submit', array('class' => 'send-btn')) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection
