@extends('app')

@section('content')

    <div class="row">
        <div class="small-10 columns">
            <h2 class="subheader">Manage Counters</h2>
        </div>
        <div class="small-2 columns">
            <a href="{{route('dom.count.create')}}" class="button">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            @if (!$counts->count())
                <h2>No counts have been configured.  Please add one.</h2>
            @else
                <ul>
                    @foreach($counts as $count)

                        <li>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dom.count.destroy', $count->id))) !!}

                            {{ $count->name }} :: {{ $count->count }}

                            {!! link_to_route('dom.count.increment', '+', array($count->id), array('class' => 'button tiny')) !!}
                            {!! link_to_route('dom.count.decrement', '-', array($count->id), array('class' => 'button tiny')) !!}
                            {!! link_to_route('dom.count.reset', 'Reset', array($count->id), array('class' => 'button tiny')) !!}
                            {!! link_to_route('dom.count.edit', 'Edit', array($count->id), array('class' => 'button tiny')) !!}

                            {!! Form::submit('Delete', array('class' => 'button tiny')) !!}

                         {!! Form::close() !!}
                        </li>

                    @endforeach
                </ul>
            @endif

        </div>
    </div>


@endsection
