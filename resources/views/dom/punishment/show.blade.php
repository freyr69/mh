@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">View Punishment</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            <table>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $punishment->name }}</td>
                </tr>

                <tr>
                    <td><strong>Description:</strong></td>
                    <td>{{ $punishment->description }}</td>
                </tr>

                <tr>
                    <td><strong>Severity:</strong></td>
                    <td>{{ $punishment->severity }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="{{ route('dom.punishment.edit', $punishment->id) }}">Update</a>
                        <a href="{{ route('dom.punishment.destroy', $punishment->id) }}">Delete</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>


@endsection
