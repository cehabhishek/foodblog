@extends('layouts.admin_master')
@section('content')
    <div id="content" class="app-content">

        <h1 class="page-header">
            Update Website Title Description
        </h1>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Update Website Title Description</h4>

            </div>

            <div class="panel-body">
                <table id="data-table-default" class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th class="text-nowrap">Page</th>
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Keywords</th>
                            <th class="text-nowrap">Description</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($datas as $data)
                            <tr class="odd gradeX">
                                <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                                <td>{{ $data->page }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->keywords }}</td>
                                <td>{{ $data->meta_description }}</td>
                                <td>


                                    <a href="{{ route('admin.title.description.edit', $data->id) }}" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                </td>

                            </tr>
                            @php
                                $sr++;
                            @endphp
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
