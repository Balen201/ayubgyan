@extends('admin.index')

@section('content')

<div class="container">

    <h2 class="text-2xl font-bold my-4 text-white text-center bg-blue-500 py-2 rounded-md">داتای بەشداربووان</h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($id as $item)
            <tr>
                <td class="font-weight-bold">{{ $item->id }}</td>
                <td class="font-weight-bold">{{ $item->name }}</td>
                <td class="font-weight-bold">{{ $item->email }}</td>
                <td class="font-weight-bold">{{ $item->role }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
