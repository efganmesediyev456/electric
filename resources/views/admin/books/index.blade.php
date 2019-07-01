@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.books.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Kitabin adi</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->u_id }}</td>
                    <td>{{ $book->lng->org_name }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->path }}</td>
                    <td>
                        @if(!$book->trashed())
                            <a class="btn btn-xs btn-info" href="{{ route('admin.books.edit', [$book->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($book->trashed())
                                {{ Form::open(['route'=>['admin.books.restore', $book->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                                {{ Form::open(['route'=>['admin.books.forceDelete', $book->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.books.destroy', $book->u_id],'method' => 'delete','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $books->links() }}
        </div>
    </div>
@endsection