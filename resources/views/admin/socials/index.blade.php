@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.socials.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Link</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($socials as $social)
                <tr>
                    <td>{{ $social->u_id }}</td>
                    <td>{{ $social->lng->org_name }}</td>
                    <td>{{ $social->link }}</td>
                    <td><img src="{{ route('home') }}/images/{{ $social->icon }}" width="30px"></td>
                    <td>
                        @if(!$social->trashed())
                            <a class="btn btn-xs btn-info" href="{{ route('admin.socials.edit', [$social->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($social->trashed())
                                {{ Form::open(['route'=>['admin.socials.restore', $social->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                                {{ Form::open(['route'=>['admin.socials.forceDelete', $social->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.socials.destroy', $social->u_id],'method' => 'delete','style'=>'display:inline']) }}
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
            {{ $socials->links() }}
        </div>
    </div>
@endsection