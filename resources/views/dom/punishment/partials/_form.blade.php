<div class="row">
    <div class="large-12 columns">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name') !!}
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description') !!}
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        {!! Form::label('severity', 'Severity') !!}
        {!! Form::select('severity', ['1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10']) !!}
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        {!! Form::submit($submit_text) !!}
    </div>
</div>

