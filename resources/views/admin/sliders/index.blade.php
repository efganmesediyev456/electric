@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="{{ route('admin.sliders.create') }}"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Basliq</th>
                <th>Haqqinda</th>
                <th>duymenin yazisi</th>
                <th>Duymenin linki</th>
                <th>Sekil</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->u_id }}</td>
                    <td>{{ $slider->lng->org_name }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>{{ $slider->button_text }}</td>
                    <td>{{ $slider->button_path }}</td>
                    <td><img src="{{ route('home') }}/images/{{$slider->image}}" width="30px"
                             alt="{{ $slider->title }}"></td>
                    <td>
                        @if(!$slider->trashed())
                            <a class="btn btn-xs btn-info" href="{{ route('admin.sliders.edit', [$slider->u_id]) }}"
                               data-toggle="tooltip" data-placement="top"
                               data-title="{{ __('views.admin.users.index.edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(auth()->user()->hasRole('administrator'))
                            @if($slider->trashed())
                                {{ Form::open(['route'=>['admin.sliders.restore', $slider->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                {{ Form::close() }}
                                {{ Form::open(['route'=>['admin.sliders.forceDelete', $slider->u_id],'method' => 'post','style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            @else
                                {{ Form::open(['route'=>['admin.sliders.destroy', $slider->u_id],'method' => 'delete','style'=>'display:inline']) }}
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
            {{ $sliders->links() }}
        </div>
    </div>
@endsection