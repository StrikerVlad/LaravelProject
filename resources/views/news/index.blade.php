@extends('layouts.app')

@section('content')
<div class="card">
    <button class="btn btn-success float-right mr-5 ml-5 mb-2 mt-2" data-toggle="modal" data-target="#myModal">
        <span class="fa fa-plus" aria-hidden="true"></span> NEWS
    </button>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item->description, 100, $end=' ... ') }}</td>
                    <td class="publish-{{$item->id}}">
                        <a href="#" id="{{ $item->id }}" class="btn-submit" onclick="changeStatus('{{ $item->id }}')">
                            @if($item->is_published)
                            <span class="icon fa fa-check fa-2x"></span>
                            @else<span class="icon fa fa-times fa-2x"></span>
                            @endif
                        </a>
                    </td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <span class="icon fa fa-pencil"></span>
                        </a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <span class="icon fa fa-times"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="paginate" style="margin-left:20px">
        {{ $news->links() }}
    </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <textarea id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="description" value="{{ old('email') }}" required autocomplete="email">
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    function changeStatus(id) {
        let element = document.getElementById(id);
        $.ajax({
            type: 'GET',
            url: '/news/' + id + '/status',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id
            }
        }).then(function(response) {
            console.log(response);
            let child = element.lastElementChild;
            element.removeChild(child);
            let span = document.createElement('span');
            if (response.id == 1) {
                span.className = 'icon fa fa-check  fa-2x';
            } else {
                span.className = 'icon fa fa-times  fa-2x';
            }
            element.appendChild(span);
            $(".publish-".id).add(element);
        });
    }
</script>
@endsection