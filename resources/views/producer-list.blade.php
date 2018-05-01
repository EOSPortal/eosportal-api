
@extends('layouts.frontpage')

@section('content')
    <h1 class="text-center p-4 m-4">Producers</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Organization</th>
                <th>Block</th>
                <th>Block created at</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)

            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->organization }}</td>
                <td>{{ $item->num_blocks }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->contact }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
