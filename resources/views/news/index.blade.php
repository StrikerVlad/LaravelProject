@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="paginate" style="margin-left:20px">
        {{ $news->links() }}
    </div>
</div>
@endsection