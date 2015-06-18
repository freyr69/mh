@extends('app')

@section('content')

<div class="row">
    <div class="small-12 columns">
        <h2 class="subheader">Home</h2>
    </div>
</div>

<div class="row">

    <div class="medium-6 columns">

        <div class="panel">
            <h4>Mood</h4>
            <div style="text-align: center">
                <a class="button small round secondary" href="dom/mood/down"> - </a>
                &nbsp;&nbsp;<span style="font-size: 48px;">{{ $mood }}</span>&nbsp;&nbsp;
                <a class="button small round secondary" href="dom/mood/up"> + </a>
            </div>
        </div>

    </div>

    <div class="medium-6 columns">

        <div class="panel">
            <h4>Info:: {{ $sub->name }}</h4>
            <ul>
                <li><strong>Id:  </strong>{{ $sub->id }}</li>
                <li><strong>Name:  </strong>{{ $sub->name }}</li>
                <li><strong>Email:  </strong>{{ $sub->email }}</li>
            </ul>
        </div>

    </div>

</div>

<div class="row">
    <div class="medium-6 columns">

        <div class="panel">
            <h4>Tasks</h4>
            <ul>
                @foreach($tasks as $task)
                <li><strong>{{ $task->name }}:  </strong>{{ $task->due_on }}</li>
                @endforeach
            </ul>
        </div>

    </div>

    <div class="medium-6 columns">

        <div class="panel">
            <h4>Punishments</h4>
            <ul>
                @foreach($punishments as $punishment)
                    <li><strong>{{ $punishment->name }}:  </strong>{{ $punishment->severity }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

<div class="row">
    <div class="medium-6 columns">

        <div class="panel">
            <h4>Timers</h4>
            <ul>
                @foreach($timers as $timer)
                    <li><strong>{{ $timer->name }}:  </strong>{{ $timer->duration }}</li>
                @endforeach
            </ul>
        </div>

    </div>

    <div class="medium-6 columns">

        <div class="panel">
            <h4>Counts</h4>
            <ul>
                @foreach($counts as $count)
                    <li><strong>{{ $count->name }}:  </strong>{{ $count->count }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

<div class="row">
    <div class="medium-6 columns">

        <div class="panel">
            <h4>Confessions</h4>
            <ul>
                @foreach($confessions as $confession)
                    <li>{{ $confession->description }}</li>
                @endforeach
            </ul>
        </div>

    </div>


</div

@endsection
