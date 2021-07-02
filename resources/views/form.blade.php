@extends('layouts.app')

@section('title')
    Form
@endsection


@section('content')

    {{--@foreach($data as $item)--}}
        {{--{{ $item->name }}--}}
    {{--@endforeach--}}

    <form action="{{url('about/test/store')}}" method="POST">
        @csrf
        Picture: <input type="file" name="picture">
        <input type="submit">
    </form>

    <div class="container ref-form">

        <h2>Добавть новое изображение в галлерею:</h2>

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" multiple name="picture">
            <p><select name="type[]">
                <option selected disabled>Выберите категорию</option>
                <option value="animals">Анималистика</option>
                <option value="people">Портреты</option>
                <option value="landscapes">Пейзажи</option>
            </select></p>
            <input type="submit" class="btn btn-dark">
        </form>

    </div>

@endsection
