@extends('app')

@section('content')

    <div class="row">
        <div class="small-10 columns">
            <h2 class="subheader">Manage Punishments</h2>
        </div>
        <div class="small-2 columns">
            <a href="{{route('dom.punishment.create')}}" class="button">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            @if (!$punishments->count())
                <h2>No punishments have been configured.  Please add one.</h2>
            @else
                <ul>
                    @foreach($punishments as $punishment)

                        <li>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dom.punishment.destroy', $punishment->id))) !!}

                            <a href="{{ route('dom.punishment.show', $punishment->id) }}">{{ $punishment->name }}</a>

                            {!! link_to_route('dom.punishment.edit', 'Edit', array($punishment->id), array('class' => 'button tiny')) !!}

                            {!! Form::submit('Delete', array('class' => 'button tiny')) !!}

                         {!! Form::close() !!}
                        </li>

                    @endforeach
                </ul>
            @endif

        </div>
    </div>


@endsection
