@extends('app')

@section('content')

    <div class="block-header">
        <h2>Home</h2>
    </div>

    <div class="row">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header-alt"><h2>Mood</h2></div>
                <div class="card-body card-padding">
                    <div class="mood">
                        <div class="decrement">
                            <a href="dom/mood/down"> - </a>
                        </div>
                        <div class="number">{{ $mood }}</div>
                        <div class="increment">
                            <a href="dom/mood/up"> + </a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="card">

                <div class="card-header-alt"><h2>{{ $sub->name }}</h2></div>
                <div class="card-body card-padding">
                    <ul class="list-unstyled">
                        <li><strong>Id: </strong>{{ $sub->id }}</li>
                        <li><strong>Name: </strong>{{ $sub->name }}</li>
                        <li><strong>Email: </strong>{{ $sub->email }}</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="listview lv-bordered lv-lg">
                    <div class="lv-header-alt"><h2>Tasks</h2></div>
                    <div class="lv-body">
                        @foreach($tasks as $task)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">{{ $task->name }} - {{ $task->due_on }}</div>
                                    <small class="lv-small">{{ $task->description }} </small>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('task.edit', array($task->id)) }}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="card">
                <div class="listview lv-bordered lv-lg">
                    <div class="lv-header-alt"><h2>Assigned Punishments</h2></div>
                    <div class="lv-body">
                        @foreach($assignedPunishments as $punishment)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">{{ $punishment->name }}  <span class="label label-primary">{{ $punishment->severity + 1 }}</span></div>
                                    <small class="lv-small">{{ $punishment->description }} </small>
                                    <small class="lv-small">{{ $punishment->notes }} </small>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('dom.assigned_punishment.complete', array($punishment->id)) }}">
                                            <i class="zmdi zmdi-check"></i>
                                        </a>
                                        <a href="{{ route('dom.assigned_punishment.edit', array($punishment->id)) }}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="listview lv-bordered lv-lg">
                    <div class="lv-header-alt"><h2>Timers</h2></div>
                    <div class="lv-body">
                        @foreach($timers as $timer)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">{{ $timer->name }} - {{ $timer->duration->diffForHumans() }}</div>
                                    <small class="lv-small">{{ $timer->description }} </small>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('dom.timer.resetd', array($timer->id)) }}">
                                            <i class="zmdi zmdi-rotate-left"></i>
                                        </a>
                                        <a href="{{ route('dom.timer.edit', array($timer->id)) }}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">


            <div class="card">
                <div class="listview lv-bordered lv-lg">
                    <div class="lv-header-alt"><h2>Counts</h2></div>
                    <div class="lv-body">
                        @foreach($counts as $count)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">
                                        {{ $count->name }} 
                                        <span class="label label-primary">{{ $count->count }}</span>
                                    </div>
                                    <small class="lv-small">{{ $count->description }} </small>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('dom.count.incrementd', array($count->id)) }}">
                                            <i class="zmdi zmdi-plus"></i>
                                        </a>
                                        <a href="{{ route('dom.count.decrementd', array($count->id)) }}">
                                            <i class="zmdi zmdi-minus"></i>
                                        </a>
                                        <a href="{{ route('dom.count.resetd', array($count->id)) }}">
                                            <i class="zmdi zmdi-rotate-left"></i>
                                        </a>
                                        <a href="{{ route('dom.count.edit', array($count->id)) }}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="listview lv-bordered lv-lg">
                    <div class="lv-header-alt"><h2>Confessions</h2></div>
                    <div class="lv-body">
                        @if (count($confessions) > 0)
                            @foreach($confessions as $confession)
                                <div class="lv-item media">
                                    <div class="media-body">
                                        <div class="lv-title">{{ $confession->description }}</div>
                                        <div class="lv-actions actions">
                                            <a href="{{ route('dom.confession.confirmd', array($confession->id)) }}">
                                                <i class="zmdi zmdi-check"></i>
                                            </a>
                                            <a href="{{ route('dom.confession.edit', array($confession->id)) }}">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">No new confessions...</div>
                                    <div class="lv-actions actions">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>


    </div

@endsection
