<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Новости науки</title>
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="{{asset('javascripts/modernizr.foundation.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fonts/ligature.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic'
          rel='stylesheet' type='text/css'/>
</head>
<body>
<nav>
    <div class="twelve columns header_nav">
        <div class="row">

            <ul id="menu-header" class="nav-bar horizontal">

                <li><a href="/">Главная</a></li>
                <li><a href="/rubric/Искусственный интеллект">Искусственный интеллект</a></li>
                <li><a href="/rubric/Искусственная нейронная сеть">Искусственная нейронная сеть</a></li>
                <li><a href="/rubric/Распознавание образов">Распознавание образов</a></li>
                <li><a href="/rubric/Робототехника">Робототехника</a></li>
                <li><a href="/rubric/Информационное общество">Информационное общество</a></li>
                <li><a href="/rubric/Автоматическая обработка текста">Автоматическая обработка текста</a></li>
                <li><a href="/home">Профиль</a></li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="row">
        @yield('header')
    </div>
</header>
@yield('section')
<footer>
    <div class="row">

        <div class="twelve columns footer">
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
            <a href="" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
        </div>

    </div>
</footer>
<script src="{{asset('javascripts/foundation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('javascripts/app.js')}}" type="text/javascript"></script>
</body>
</html>
