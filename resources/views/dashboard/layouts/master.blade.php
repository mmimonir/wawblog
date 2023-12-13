<!doctype html>
<html lang="en">

<head>
    @include('dashboard.layouts.partials.header')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.partials.side-bar')
            <div class="col-md-10 px-0 offset-2">
                @include('dashboard.layouts.partials.top-bar')
                <div class="p-3">
                    @include('dashboard.layouts.partials.breadcumb')
                    <fieldset>
                        <legend>{{ isset($cms_content['module_name'], $cms_content['sub_module_name']) ?
                            $cms_content['module_name'].' - '.$cms_content['sub_module_name']:'Dashboard'}}</legend>
                        @yield('content')
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.layouts.partials.scripts')
</body>

</html>