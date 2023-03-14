{{--@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp--}}
<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Word Count</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('word')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Word Count</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Home Page</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('search.view')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Home</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Users</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('view.user')}}"><i class="fa fa-square" aria-hidden="true"></i><span>User List</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Search</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('view.search')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Search List</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
<!-- Side Header End -->

