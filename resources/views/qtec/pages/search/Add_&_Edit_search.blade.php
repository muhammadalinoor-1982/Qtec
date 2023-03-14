@extends('qtec.layout.allPortion.master')
@section('content')
    <form method="post" action="{{route('store.search')}}" enctype="multipart/form-data">
        @csrf
        @include('qtec.layout.allForms._Form_search')
        <div class="col-12 mt-10"><button class="button button-primary button-outline">Submit</button></div>
    </form>
@endsection
