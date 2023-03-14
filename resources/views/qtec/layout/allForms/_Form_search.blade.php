<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('view.search')}}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                        Add New Search
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="keywords" class="form-control form-control-sm @error('keywords') is-invalid @enderror" placeholder="Keywords" ></div>
                            @error('keywords')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    {{--</div>
                    <div class="col-lg-4 col-12 mb-20">--}}
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="time_range" class="form-control form-control-sm @error('time_range') is-invalid @enderror" placeholder="Time Range" ></div>
                            @error('time_range')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="more_filters" class="form-control form-control-sm @error('more_filters') is-invalid @enderror" placeholder="More Filters" ></div>
                            @error('more_filters')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    {{--</div>
                    <div class="col-lg-4 col-12 mb-20">--}}
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">Select Date</h6>
                        <input type="text" name="select_date" class="form-control input-date-single @error('select_date') is-invalid @enderror">
                        @error('select_date')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    {{--</div>
                    <div class="col-lg-4 col-12 mb-20">--}}

                    {{--</div>
                    <div class="col-lg-4 col-12 mb-20">--}}
                        <p>Users</p>
                        <select class="form-control select2 @error('users') is-invalid @enderror" name="users">
                            <optgroup label="Please Select">
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                    <option value="{{($user->name)}}" {{($user->users == $user->name)?"selected":""}}>{{$user->name}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('users')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Small Field-->
                </div>
            </div>
        </div>
    </div>
    <!--Form Size End-->
</div>


