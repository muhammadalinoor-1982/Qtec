@extends('qtec.layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Search List</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('create.search')}}" class="btn btn-sm btn-primary">Add New</a>
                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Keywords</th>
                            <th>Users</th>
                            <th>Time Range</th>
                            <th>Selected Date</th>
                            <th>More Filters</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($searches as $search)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{$search->keywords}}</td>
                                <td>{{$search['user']['name']}}</td>
                                <td>{{$search->time_range}}</td>
                                <td>{{$search->select_date}}</td>
                                <td>{{$search->more_filters}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>address</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--Export Data Table End-->
    </div>
@endsection


