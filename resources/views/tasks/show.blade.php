@extends('app')

@section('content')

<div class="row">
    <div class="small-10 columns">
        <h2 class="subheader">Task - {{ $task->name }}</h2>
    </div>
    <div class="small-2 columns">
        @if ($task->verified < 2)
        <a href="{{ url('task/' . $task->id . '/complete') }}" class="button small ">Complete</a>
        @endif
    </div>
</div>

<div class="row">
    <div class="medium-6 small-12 columns">
        @if (strtotime($task->due_on) < time())
        <div data-alert class="alert-box alert">
            This task is overdue.
        </div>
        @endif
        <p>{{ $task->description }}</p>
        <p>This task is due on {{ $task->due_on }}</p>
        
    </div>
    
    <div class="medium-6 small-12 columns">
            @if ($task->complete)
            <div class="panel">
                @if ($task->complete && $task->verified == 2)
                <p>Completed on {{ $task->completed_on }}.</p>
                @elseif ($task->complete && $task->verified < 2)
                <p>Attempted completion on {{ $task->completed_on }}.</p>
                @endif

                @if ($task->complete)
                    @if ($task->verified == 0)
                    <p>Verification is pending.</p>
                    @elseif ($task->verified == 1)
                    <p>Verification failed.</p>
                    @else
                    <p>Verified on {{ $task->verified_on }}.</p>
                    @endif

                    <p><strong>Notes:  </strong>{{ $task->verified_notes }}</p>
                @endif

            </div>
            @endif
    </div>
</div>

@endsection
