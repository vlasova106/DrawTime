@section('head')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<!-- Scripts -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!-- Fonts -->

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<style>
    .login-form {
        margin-top: 100px !important;
    }

    /*editor styles*/

    .wPaint-menu-handle {
        box-shadow: none !important;
        background-color: #F1F2F8 !important;
    }

    .wPaint-theme-classic,
    .wPaint-menu-icon {
        border-color: #6C757D !important;
        background-color: #6C757D !important;
        box-shadow: none !important;
        border-radius: 0px !important;
    }

    .wPaint-menu-holder {
        border-style: solid;
        border-width: 1px;
        box-shadow: 0px 0px 0px #555555 !important;
        border-radius: 0px !important;
    }

    .wPaint-menu-icon>.wPaint-menu-icon-img {
        color: #F1F2F8 !important;
    }

    .wPaint-menu-icon-name-rectangle,
    .wPaint-menu-icon-name-ellipse,
    .wPaint-menu-icon-name-line,
    .wPaint-menu-icon-name-text,
    .wPaint-menu-icon-name-bucket,
    .wPaint-menu-icon-name-fillStyle {
        display: none !important;
    }

    /*editor styles - end*/

    body {
        background-color: #e8e9f3 !important;
        color: #343a40 !important;
    }

    .hidden_inp {
        display: none;
    }

    .preventscroll {
        overflow-y: scroll;
    }

    a:hover {
        text-decoration: none !important;
        transition: .4s;
    }

    footer {
        background-color: rgba(27, 30, 33, 0.9);
        padding: 32px 0;
        color: #C6D0D9;
    }

    .main-page-title {
        min-height: 856px;
        color: #fff;
        padding-top: 260px !important;
        background-image: url(/img/mainpage_title.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        margin-bottom: 48px;
    }

    .main-page-title h1 {
        font-size: 90px !important;
    }

    .main-page-title a {
        font-size: 24px !important;
        margin: 0 8px;
    }

    .main-page-title>.row {
        margin-right: 0px !important;
    }

    .main-cards,
    .project-info {
        background-color: #fff;
        padding: 32px 0 16px 0;
        margin: 32px auto 72px auto !important;
        font-size: 18px !important;
    }

    .site-header {
        background-color: rgba(27, 30, 33, 0.9);
    }

    .site-header a {
        color: #C6D0D9 !important;
    }

    .site-header a:hover {
        color: #E6EAEE !important;
    }

    .about-info {
        background-color: #FFFFFF;
        padding: 64px;
        height: 720px;
        margin: 72px auto;
    }

    .account-content {
        padding-top: 56px;
        font-size: 18px;
        height: auto;
    }

    .user-img {
        width: 350px;
        height: 350px;
        border: 3px #343a40 solid;
        margin: 32px 16px 32px 16px;
        float: left;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .avatar {
        width: 128px;
        height: 128px;
        background-color: #343a40;
        background-size: cover;
        border-radius: 200px;
        border: 3px #343a40 solid;
        margin-bottom: 12px;
        background-image: url(/img/ava.gif);
         !important;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .login-form {
        margin-top: 100px;
    }

    .info {
        margin-bottom: 32px !important;
        padding: 16px 32px;
    }

    .f-info p {
        margin: 0px 32px 10px 0px;
    }

    .follow-but {
        font-size: 18px !important;
        margin-top: 8px;
    }

    .user-images {
        margin-top: 32px;
    }

    .card-img-top {
        margin: 0 auto 16px auto !important;
    }

    .card {
        border: 0px !important;
    }

    .btn {
        border-radius: 2px !important;
    }

    .btn>a {
        color: #fff !important;
    }

    .btn-danger {
        background-color: #CC563E !important;
        border-color: #D16A54 !important;
    }

    .ref-form {
        background-color: #FFFFFF;
        padding: 36px;
        margin: 36px auto;
        height: 665px;
    }

    .ref-form input {
        margin-bottom: 16px;
        margin-top: 16px;
    }

    .best-of-week {
        padding: 36px;
        margin: 36px auto;
    }

    .project-info {
        padding: 32px 120px !important;

    }

    .project-info>h1 {
        margin-bottom: 12px;
    }

    .new-images {
        min-height: 480px;
    }

    #show-image {
        position: absolute;
        top: 8vw;
        right: 30vw;
        z-index: 20;
        height: auto;
        padding: 20px;
        width: 40vw;
        background-color: #FFFFFF;
        border: 3px #343a40 solid;
    }

    .backdrop {
        display: none;
        position: absolute;
        z-index: 15;
        width: 100%;
        height: 100vh;
        background: #000;
        opacity: 0.5;
    }

    #show-image>.image-info {
        text-align: left;
        margin-top: 4vw;
        font-size: 18px;
    }

    #show-image>.user-img {
        height: 450px !important;
        width: 450px !important;
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: contain, cover;
        /* Resize the background image to cover the entire container */
    }
</style>