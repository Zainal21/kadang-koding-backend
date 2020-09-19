<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="{{asset('admin/assets/images/author/avatar.png')}}" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<i
                class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <form action="{{url('/site/logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </div>
    </div>
</div>
