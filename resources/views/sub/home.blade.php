@extends('app')

@section('content')

<div class="row">
    <div class="small-12 columns">
        <h2 class="subheader">Home</h2>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">
        @if ($dom)
        <p>
            <strong>{{ $dom->name }}</strong> is in charge and mood is {{ $mood }}.
        <p>    
        @else
            <p>No dom has taken you.</p>
        @endif
    </div>
</div>


@endsection
