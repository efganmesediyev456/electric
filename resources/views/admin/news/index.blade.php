@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.news.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Title</th>
                <th>Description</th>
                <th>Text</th>
                <th>User name</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($newses as $news)
                <tr>
                    <td>{{ $news->u_id }}</td>
                    <td>{{ $news->lng->org_name }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->description }}</td>
                    <td>{{ $news->text }}</td>
                    <td>{{ $news->user->name }}</td>
                    <td>{{ $news->name }}</td>
                    <td><img src="{{ route('home') }}/images/{{ $news->image }}" width="30px"
                             alt="{{ $news->picture }}"></td>
                    <td>
                        @if(!$news->trashed())
                            <a class="btn btn-xs btn-info" href="{{ route('admin.news.edit', [$news->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($news->trashed())
                                {{ Form::open(['route'=>['admin.news.restore', $news->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                                {{ Form::open(['route'=>['admin.news.forceDelete', $news->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.news.destroy', $news->u_id],'method' => 'delete','style'=>'display:inline']) }}
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
            {{ $newses->links() }}
        </div>
    </div>
@endsection