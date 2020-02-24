@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td><img src="{{ 'storage/' . $user->img }}" width="10%" style="border-radius: 40%"></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Action</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection