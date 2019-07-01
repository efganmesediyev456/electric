@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.generals.create') }}"><i class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Unvan</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($generals as $general)
                <tr>
                    <td>{{ $general->u_id }}</td>
                    <td>{{ $general->lng->org_name }}</td>
                    <td>{{ $general->address }}</td>
                    <td>{{ $general->phone }}</td>
                    <td>{{ $general->email }}</td>
                    <td><img src="{{ route('home') }}/images/{{ $general->image }}" width="30px" alt="{{ $general->image }}"></td>
                    <td>

                            <a class="btn btn-xs btn-info" href="{{ route('admin.generals.edit', [$general->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        {{--@if(auth()->user()->hasRole('administrator'))
                            @if($book->trashed())
                                {{ Form::open(['route'=>['admin.books.restore', $book->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
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
                        @endif--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $generals->links() }}
        </div>
    </div>
@endsection