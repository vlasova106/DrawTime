@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<div class="account-content">

    <div class="container info">
        <div class="row  gy-5">

            <div class="col-3">
                <div class="avatar" style=""></div>
            </div>

            <div class="col-9" >
                <p>{{ Auth::user()->name }}</p>

                <div class="d-flex justify-content-start f-info"><p>Подписчики: 79</p><p>Подписки: 14</p></div>

                <button type="button" class="btn btn-dark follow-but">Подписаться</button>
            </div>

        </div>
    </div>


    <hr>

    <div class="container user-images">

        <h3 class="text-center">Публикации</h3>

        <div class="row">
            <div class="col-4">
                <div class="user-img u1"></div>
            </div>
            <div class="col-4">
                <div class="user-img u2"></div>
            </div>
            <div class="col-4">
                <div class="user-img u3"></div>
            </div>
        </div>
    </div>

</div>
@endsection
