@extends('app')

@section('content')

    <div class="row">
        <div class="small-10 columns">
            <h2 class="subheader">Manage Confessions</h2>
        </div>
        <div class="small-2 columns">
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            @if (!$confessions->count())
                <h2>No confessions have been reported.</h2>
            @else
                <ul>
                    @foreach($confessions as $confession)

                        <li>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dom.confession.destroy', $confession->id))) !!}

                            {{ $confession->description }}

                            {!! link_to_route('dom.confession.edit', 'Edit', array($confession->id), array('class' => 'button tiny')) !!}

                            {!! Form::submit('Delete', array('class' => 'button tiny')) !!}

                         {!! Form::close() !!}
                        </li>

                    @endforeach
                </ul>
            @endif

        </div>
    </div>


@endsection
