@extends('qtec.layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Search</h3>
                </div>
                <div class="box-body">
                    <div class="header-search-form">
                          <form action="#">
                                <input type="text" placeholder="Search Here">
                                <button><i class="zmdi zmdi-search"></i></button>
                          </form>
                               <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                    </div>
                    <br>
                    <div class="col-sm-12 col-12 mb-20">
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">All Keywords:</h6>
                        <div class="adomx-checkbox-radio-group">
                            <label class="adomx-checkbox"><input type="checkbox" name="keywords 1[]" id="keywords 1" value="keywords 1"> <i class="icon"></i> keywords 1</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="keywords 2[]" id="keywords 2" value="keywords 2"> <i class="icon"></i> keywords 2</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="keywords 3[]" id="keywords 3" value="keywords 3"> <i class="icon"></i> keywords 3</label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-12 mb-20">
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">All Users:</h6>
                        <div class="adomx-checkbox-radio-group">
                            <label class="adomx-checkbox"><input type="checkbox" name="User 1[]" id="User 1" value="User 1"> <i class="icon"></i> User 1</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="User 2[]" id="User 2" value="User 2"> <i class="icon"></i> User 2</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="User 3[]" id="User 3" value="User 3"> <i class="icon"></i> User 3</label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-12 mb-20">
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">Time Range:</h6>
                        <div class="adomx-checkbox-radio-group">
                            <label class="adomx-checkbox"><input type="checkbox" name="See data from yesterday" id="See data from yesterday" value="See data from yesterday"> <i class="icon"></i> See data from yesterday</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="See data from last week" id="See data from last week" value="See data from last week"> <i class="icon"></i> See data from last week</label>
                            <label class="adomx-checkbox"><input type="checkbox" name="see data from last month" id="see data from last month" value="see data from last month"> <i class="icon"></i> see data from last month</label>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-20">
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">Select Start Date</h6>
                        <input type="text" name="select_start_date" class="form-control input-date-single @error('select_start_date') is-invalid @enderror">
                        @error('select_start_date')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror

                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">Select End Date</h6>
                        <input type="text" name="select_end_date" class="form-control input-date-single @error('select_end_date') is-invalid @enderror">
                        @error('select_end_date')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-12 mb-20">
                        <h6 style="color: rgba(0,153,255,0.92)" class="mb-15">More filters:</h6>
                        <div class="adomx-checkbox-radio-group">
                            <label class="adomx-checkbox"><input type="checkbox" name="[]" id="[]" value="[]"> <i class="icon"></i> </label>
                            <label class="adomx-checkbox"><input type="checkbox" name="[]" id="[]" value="[]"> <i class="icon"></i> </label>
                        </div>
                    </div>

</div>
</div>
</div>
<!--Export Data Table End-->
</div>
@endsection


