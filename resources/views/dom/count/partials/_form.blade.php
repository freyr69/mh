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
        {!! Form::text('count', null, array('class' => 'form-control fg-input')) !!}
    </div>
    {!! Form::label('count', 'Count', array('class' => 'fg-label')) !!}   
</div>

<div class="form-group fg-float">
    <div class="fg-line">
        {!! Form::checkbox('sub_visible', 1, null, array('class' => 'form-control fg-input')) !!}
    </div>
    {!! Form::label('sub_visible', 'Visible', array('class' => 'fg-label')) !!}   
</div>


<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn btn-primary')) !!}
</div>



