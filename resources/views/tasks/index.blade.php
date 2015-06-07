@extends('app')

@section('content')

<div class="row">
    <div class="small-12 columns">
        <h2 class="subheader">Tasks</h2>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">
        @if (count($tasks) > 0)
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Due On</th>
                    <th>Completed</th>
                    <th>Verified</th>
                    <th>Actions</th>
                </tr>

                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_on }}</td>
                    <td>{{ $task->complete ? 'Yes' : 'No' }}</td>
                    @if ($task->verified == 0)
                    <td>No</td>
                    @elseif ($task->verified == 1)
                    <td>Failed</td>
                    @else
                    <td>Yes</td>
                    @endif
                    <td><a href="#">Complete</a> | <a href="{{ url('task', $task->id) }}">View</a></td>
                </tr>
                @endforeach
            </table>
            @else
            <h2>No tasks at this time...</h2>
            @endif
    </div>
</div>

@endsection
