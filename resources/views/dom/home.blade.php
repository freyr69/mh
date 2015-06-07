@extends('app')

@section('content')

<div class="row">
    <div class="small-12 columns">
        <h2 class="subheader">Home</h2>
    </div>
</div>

<div class="row">

    <div class="small-3 small-centered columns">

        <a class="button small round secondary" href="dom/mood/down"> - </a>
        &nbsp;&nbsp;<span style="font-size: 48px;">{{ $mood }}</span>&nbsp;&nbsp;
        <a class="button small round secondary" href="dom/mood/up"> + </a></div>

</div>

<div class="row">
    <div class="small-3 small-centered columns">
        <a class="button alert" href="dom/punish">Assign Punishment</a>
    </div>
</div>

<div class="row">
    <div class="small-12 columns">
        <p><strong>Id:  </strong> {{ $sub->id }}</p>
        <p><strong>Name:  </strong> {{ $sub->name }}</p>
        <p><strong>Email:  </strong> {{ $sub->email }}</p>
    </div>
</div>


@endsection
