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

<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn btn-primary')) !!}
</div>




