@extends('app')

@section('content')

    <div class="row">
        <div class="small-10 columns">
            <h2 class="subheader">Manage Timers</h2>
        </div>
        <div class="small-2 columns">
            <a href="{{route('dom.timer.create')}}" class="button">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            @if (!$timers->count())
                <h2>No timers have been configured.  Please add one.</h2>
            @else
                <ul>
                    @foreach($timers as $timer)

                        <li>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dom.timer.destroy', $timer->id))) !!}

                            {{ $timer->name }} :: {{ $timer->duration->diffForHumans() }}

                            {!! link_to_route('dom.timer.reset', 'Reset', array($timer->id), array('class' => 'button tiny')) !!}

                            {!! link_to_route('dom.timer.edit', 'Edit', array($timer->id), array('class' => 'button tiny')) !!}

                            {!! Form::submit('Delete', array('class' => 'button tiny')) !!}

                         {!! Form::close() !!}
                        </li>

                    @endforeach
                </ul>
            @endif

        </div>
    </div>


@endsection
