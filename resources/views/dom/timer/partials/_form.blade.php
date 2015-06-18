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
        {!! Form::submit($submit_text) !!}
    </div>
</div>

