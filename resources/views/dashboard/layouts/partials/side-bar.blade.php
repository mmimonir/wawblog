<div class="col-md-2 side-bar">
    <div class="logo">
        <img src="{{ 'image/asset/logo.png' }}" class="img-thumbnail" alt="logo" />
    </div>
    <ul class="waw-menu">
        <li class="waw-menu-item">
            <a href=""><i class="fa-solid fa-house"></i> Dashboard</a>
        </li>
        <li class="waw-menu-item waw-dropdown-container active">
            <a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i> Blog <i
                    class="waw-menu-item-right-icon fa-solid fa-chevron-down"></i></a>
            <ul class="waw-dropdown" style="display: none;">
                <li><a href=""><i class="fa-solid fa-list"></i> Blog List</a></li>
                <li><a href=""><i class="fa-solid fa-plus"></i> Add Blog</a></li>
            </ul>
        </li>
    </ul>
    <small class="app_config">Version: <span class="text-success">{{ env('APP_VERSION') ?? '' }}</span> |
        Running On: <span class="text-success">{{
            env('APP_ENV') ?? ''
            }}</span></small>
</div>
