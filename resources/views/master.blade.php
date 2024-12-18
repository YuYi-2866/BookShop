<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="resources\css\reset.css">
    <link rel="stylesheet" href="resources\css\reset.css">
    <script src="resources\js\jquery-3.7.1.js"></script>
    @yield('my-js')
</head>

<body>
    @yield('content')
    <div class="bk_toptips"><span></span></div>
    <!--BEGIN actionSheet-->
    <div id="global_menu" onclick="onMenuClick()">

    </div>
    <!--END actionSheet-->
</body>

</html>