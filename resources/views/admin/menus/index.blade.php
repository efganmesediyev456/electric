@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.menus.create') }}"><i class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>ordering</th>
                <th>title</th>
                <th>description</th>
                <th>keyword</th>
                <th>name</th>
                <th>url_tag</th>
                <th>picture</th>
                <th>Arxa sekil</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu->u_id }}</td>
                    <td>{{ $menu->lng->org_name }}</td>
                    <td>{{ $menu->ordering }}</td>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>{{ $menu->keyword }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->url_tag }}</td>
                    <td><img src="{{ route('home') }}/images/{{ $menu->picture }}" width="30px" alt="{{ $menu->picture }}"></td>
                    <td><img src="{{ route('home') }}/images/{{ $menu->bg_image }}" width="30px" alt="{{ $menu->bg_image }}"></td>
                    <td>
                        @if(!$menu->trashed())
                            <a class="btn btn-xs btn-info" href="{{ route('admin.menus.edit', [$menu->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($menu->trashed())
                                {{ Form::open(['route'=>['admin.menus.restore', $menu->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                                    {{ Form::open(['route'=>['admin.menus.forceDelete', $menu->u_id],'method' => 'post','style'=>'display:inline']) }}
                                    <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                            data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.menus.destroy', $menu->u_id],'method' => 'delete','style'=>'display:inline']) }}
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
            {{ $menus->links() }}
        </div>
    </div>
@endsection