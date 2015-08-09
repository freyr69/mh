<div class="form-group fg-float">
    <div class="fg-line">
        {!! Form::text('name', null, array('class' => 'form-control fg-input')) !!}
    </div>
    {!! Form::label('name', 'Name', array('class' => 'fg-label')) !!}   
</div>

<div class="form-group fg-float">
    <div class="fg-line">
        {!! Form::textarea('description', null, array('class' => 'form-control fg-input')) !!}
    </div>
    {!! Form::label('description', 'Description', array('class' => 'fg-label')) !!}   
</div>

<div class="form-group fg-float">
    <div class="fg-line">
        {!! Form::select('severity', ['1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'], null, array('class' => 'form-control fg-input')) !!}
    </div>
    {!! Form::label('severity', 'Severity', array('class' => 'fg-label')) !!}   
</div>

<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn btn-primary')) !!}
</div>

