@extends('layouts.app')

@section('title')
Последние публикации
@endsection

<div id="show-image">

    <div class="user-img" id="img"></div>
    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Закрыть" onclick="hide()" style="margin-bottom: 2vw !important; float: right; display: block;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
        </svg>
    </button>
    <div class="image-info">
        <p>Автор: <a id="author" href=""></a></p>
        <p id="com"></p>
        <a href="refs/animals/16.jpg" target="_blank" id="ref_href">Референс</a>
    </div>

</div>

<div class="backdrop" id="fade"></div>
@section('content')

<form action="/new" method="POST" id="img_id_form">
    <input type="hidden" name="img_id" id="img_id">
</form>

<h1 class="text-center" style="margin-top: 32px;">Последние публикации</h1>

<div class="container new-images" style="min-height: 680px !important;">
    <div class="row">

        @foreach($images->reverse() as $img)

        <div class="col-4" onclick="show(this.querySelector('#user-image').title, this.querySelector('#user-image').style.backgroundImage, this.querySelector('#user-name').title, this.querySelector('#comment').title, this.querySelector('#ref-id').title, this.querySelector('#user-id').title)">
            <div class="user-img" style="background-image: url('{{ $img->image }}'); !important;" id='user-image'></div>
            <p id="user-name" style='display:none;' title='{{$img->user_name}}'></p>
            <p id="comment" style='display:none;' title='{{$img->comment}}'></p>
            <p id="ref-id" style='display:none;' title='{{$img->ref_id}}'></p>
            <p id="user-id" style='display:none;' title='{{$img->user_name}}'></p>
        </div>

        @endforeach

    </div>
</div>


<script>
    var img_id, src, user_name, comment, ref_id;

    document.getElementById('show-image').hidden = true;

    function show(a, b, c, d, f, j) {
        img_id = a;
        src = b;
        user_name = c;
        comment = d;
        ref_id = f;

        document.getElementById('show-image').hidden = false;
        document.getElementById('img').style.backgroundImage = src;
        document.getElementById("author").innerHTML = user_name;
        document.getElementById("author").href = "/user/"+j;
        document.getElementById("com").innerHTML = comment;
        document.getElementById("ref_href").href = "refs/animals/" + ref_id + ".jpg";

        document.getElementById("fade").style.display = "block";

        $('body').addClass('preventscroll');

    }

    function hide() {
        document.getElementById('show-image').hidden = true;

        document.getElementById("fade").style.display = "none";

        $('body').removeClass('preventscroll');
    }
</script>

@endsection