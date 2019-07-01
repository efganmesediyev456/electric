@extends('admin.layouts.admin')

@section('title', 'Categoriyalar')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.categories.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Basliq</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
                <tr>
                    <td>{{ $cat->u_id }}</td>
                    <td>{{ $cat->title }}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.categories.edit', [$cat->u_id]) }}"
                           data-toggle="tooltip" data-placement="top"
                           data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        {{--{{ Form::open(['route'=>['admin.categories.destroy', $cat->u_id],'method' => 'delete','style'=>'display:inline']) }}
                        <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                            <i class="fa fa-trash"></i>
                        </button>
                        {{ Form::close() }}--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $cats->links() }}
        </div>
    </div>
@endsection