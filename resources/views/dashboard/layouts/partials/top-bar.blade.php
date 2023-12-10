<div class="top-bar d-flex justify-content-end pe-4 align-items-center">
    <div class="notifications">
        <i class="fa-solid fa-bell"></i>
    </div>
    <div class="profile-section cursor-pointer">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="{{ asset('image/asset/profile.png') }}" class="img-thumbnail" alt="profile" />
            </div>
            <div class="flex-grow-1 ms-1">
                <p>{{ Auth::user()->name }}</p>
                <p><small><i class="fa-solid fa-circle text-success"></i> Admin</small></p>
            </div>
        </div>
    </div>
    <div class="profile-dropdown" style="display: none;">
        <ul>
            <li><a href=""><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a href=""><i class="fa-solid fa-cog"></i> Settings</a></li>
            <li>
                {!! Form::open(['route'=>'logout', 'method'=>'post']) !!}
                @csrf
                <button class="btn btn-danger btn-sm mt-3"><i class="fa-solid fa-sign-out"></i>Logout</button>
                {!! Form::close() !!}
            </li>
        </ul>
    </div>
</div>
