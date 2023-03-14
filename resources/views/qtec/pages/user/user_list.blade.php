@extends('qtec.layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">User List</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('create.user')}}" class="btn btn-sm btn-primary">Add New</a>
                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td width="20%"><img src="{{(!empty($user->image))?url('public/assets/images/user/'.$user->image):url('public/assets/images/user/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="20%"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>
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


