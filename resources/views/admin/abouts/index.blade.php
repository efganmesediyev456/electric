@extends('admin.layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="row x_panel">
        {{--<a style="float: right;" class="btn btn-success" href="{{ route('admin.books.create') }}"><i class="fa fa-plus"></i> Əlavə et </a>--}}
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Basliq</th>
                <th>Etrafli</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
                <tr>
                    <td>{{ $about->u_id }}</td>
                    <td>{{ $about->lng->org_name }}</td>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->description }}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.abouts.edit', [$about->u_id]) }}"
                           data-toggle="tooltip" data-placement="top"
                           data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $abouts->links() }}
        </div>
    </div>
@endsection