@extends('layouts.layout')
@section('header')
    <h1>Добавление статьи</h1>
@endsection
@section('section')
    <form method="post" action="{{route('store')}}">
        @csrf
        <p style="margin-left:200px">
            <label>Название: </label>
            <input type="text" id="title" name="title" required style="width: 350px;">
        </p>
        <p style="margin-left:200px">
            <label>Аннотация: </label>
            <input type="text" id="lid" name="lid" required style="width: 350px;">
        </p>
        <p style="margin-left:200px">
            <label>Содержание: </label>
            <input type="text" id="content" name="content" required style="width: 350px;">
        </p>
        <p style="margin-left:200px">
            <label>Рубрика: </label>
            <input type="text" id="rubrics" name="rubrics" required style="width: 350px;">
        </p>
        <p style="margin-left:200px">
            <label>Фото: </label>
            <input type="text" id="image" name="image" required style="width: 350px;">
        </p>
        <p style="margin-left:200px"><input type="submit" value="Добавить" name="submit"></p>
    </form>
@endsection
