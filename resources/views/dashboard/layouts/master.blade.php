<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | WaW Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 side-bar">
                <div class="logo">
                    <img src="{{ 'image/asset/logo.png' }}" class="img-thumbnail" alt="logo" />
                </div>
                <ul class="waw-menu">
                    @for($i = 0; $i <= 15; $i++) <li class="waw-menu-item">
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
                        <li class="waw-menu-item waw-dropdown-container">
                            <a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i> Category <i
                                    class="waw-menu-item-right-icon fa-solid fa-chevron-down"></i></a>
                            <ul class="waw-dropdown" style="display: none;">
                                <li><a href=""><i class="fa-solid fa-list"></i> Category List</a></li>
                                <li><a href=""><i class="fa-solid fa-plus"></i> Add Category</a></li>
                            </ul>
                        </li>
                        @endfor
                </ul>
                <small class="app_config">Version: <span class="text-success">{{ env('APP_VERSION') ?? '' }}</span> |
                    Running On: <span class="text-success">{{
                        env('APP_ENV') ?? ''
                        }}</span></small>
            </div>
            <div class="col-md-10 px-0">
                <div class="top-bar">right</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/script.js') }}"></script>
</body>

</html>
