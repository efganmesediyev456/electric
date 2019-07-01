@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.lngs.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>id</th>
                <th>u_id</th>
                <th>ordering</th>
                <th>short name</th>
                <th>Original name</th>
                <th>icon</th>
                <th>default</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lngs as $lng)
                <tr>
                    <td>{{ $lng->id }}</td>
                    <td>{{ $lng->u_id }}</td>
                    <td>{{ $lng->ordering }}</td>
                    <td>{{ $lng->short_name }}</td>
                    <td>{{ $lng->org_name }}</td>
                    <td><img src="{{ route('home') }}/images/{{ $lng->icon }}" width="30px" alt="{{ $lng->org_name }}">
                    </td>
                    <td>
                        @if($lng->default)
                            <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                        @endif
                    </td>

                    <td>
                        @if(!$lng->trashed())
                        <a class="btn btn-xs btn-info" href="{{ route('admin.lngs.edit', [$lng->id]) }}"
                           data-toggle="tooltip" data-placement="top"
                           data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($lng->trashed())
                                {{ Form::open(['route'=>['admin.lngs.restore', $lng->id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.lngs.destroy', $lng->id],'method' => 'delete','style'=>'display:inline']) }}
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
            {{ $lngs->links() }}
        </div>
    </div>
@endsection