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
                    <div class="lv-header-alt"><h2>Punishments</h2></div>
                    <div class="lv-body">
                        @foreach($punishments as $punishment)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">{{ $punishment->name }}</div>
                                    <small class="lv-small">{{ $punishment->description }} </small>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('dom.punishment.edit', array($punishment->id)) }}">
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
                                    <div class="lv-title">{{ $timer->name }} - {{ $timer->duraction }}</div>
                                    <small class="lv-small">{{ $timer->description }} </small>
                                    <div class="lv-actions actions">
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
                                    <div class="lv-title">{{ $count->name }} - {{ $count->count }}</div>
                                    <small class="lv-small">{{ $count->description }} </small>
                                    <div class="lv-actions actions">
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
                        @foreach($confessions as $confession)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">{{ $confession->description }}</div>
                                    <div class="lv-actions actions">
                                        <a href="{{ route('dom.confession.edit', array($confession->id)) }}">
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


    </div

@endsection
