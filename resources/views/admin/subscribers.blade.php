@extends('layouts.admin_master')
@section('content')
    <div id="content" class="app-content">

        <h1 class="page-header">
            Subscribers
        </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Subscribers</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                            class="fa fa-times"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <table class="table table-striped table-bordered align-middle data-table-default">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($subscribers as $subscriber)
                            <tr class="odd gradeX">
                                <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    <div class="btn-group me-1 mb-1">
                                        <a href=" {{ route('admin.subscriber.delete', $subscriber->id) }}"
                                            class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
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
