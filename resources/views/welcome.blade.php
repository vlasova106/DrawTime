@extends('layouts.app')

@section('title')
Main
@endsection

@section('content')



    <section class="py-5 text-center container-fluid main-page-title">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1>DrawTime</h1>
                <p class="lead text-muted"></p>
                <p>
                        <a href="/about" class="btn btn-danger my-2">О проекте</a>
                    <a href="#cards" class="btn btn-dark my-2"  id="cards">Старт</a>
                </p>
            </div>
        </div>
    </section>


<div class="container-fluid main-cards">
    <div class="container ">

        <h3 class="text-center">Выберите тему</h3>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body" style="text-align: center">
                        <h5 class="card-title fw-bold">Портрет</h5>
                        <img src="img/woman.jpg" class="card-img-top">
                        <a href="/editor" class="btn btn-dark disabled">Go!</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body" style="text-align: center">
                        <h5 class="card-title fw-bold">Анималистика</h5>
                        <img src="img/tiger.jpg" class="card-img-top">
                        <a href="" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#animModal"  id="cards">Go!</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body fw-bold" style="text-align: center">
                        <h5 class="card-title">Пейзаж</h5>
                        <img src="img/landscape.jpg" class="card-img-top">
                        <a href="/editor" class="btn btn-dark disabled">Go!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    {{--<hr>--}}

    {{--<div class="container best-of-week">--}}
        {{--<h3 class="text-center">Лучшее за неделю</h3>--}}

        {{--<div class="row">--}}
            {{--<div class="col-4">--}}
                {{--<div class="user-img"></div>--}}
            {{--</div>--}}
            {{--<div class="col-4">--}}
                {{--<div class="user-img"></div>--}}
            {{--</div>--}}
            {{--<div class="col-4">--}}
                {{--<div class="user-img"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Модальное окно -->
    <div class="modal fade" id="animModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Выберите лимит времени:</h5>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Закрыть">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-dark" onclick="start_editor(15, 'animals')"><a href="/editor">15 минут</a></button>
                        <button type="button" class="btn btn-dark" onclick="start_editor(30, 'animals')"><a href="/editor">30 минут</a></button>
                        <button type="button" class="btn btn-dark" onclick="start_editor(60, 'animals')"><a href="/editor">60 минут</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function start_editor(time_limit, type) {
            var num = Math.floor(Math.random() * (1 - 48)) + 1;
            document.cookie = "time="+time_limit+"";
            document.cookie = "img="+num+"";
            document.cookie = "type="+type+"";
        }
    </script>

@endsection
