@extends('layouts.layout')
@section('header')
    <h1>Редактирование статьи</h1>
@endsection
@section('section')
    <form method="post" action="{{route('edit', $post->id)}}">
        @csrf
        <p style="margin-left:200px">
            <label>Название: </label>
            <input type="text" id="title" name="title" required style="width: 700px;" value="{{$post->title}}">
        </p>
        <p style="margin-left:200px">
            <label>Аннотация: </label>
            <input type="text" id="lid" name="lid" required style="width: 700px;" value="{{$post->lid}}">
        </p>
        <p style="margin-left:200px">
            <label>Содержание: </label>
            <input type="text" id="content" name="content" required style="width: 700px;" value="{{$post->content}}">
        </p>
        <p style="margin-left:200px">
            <label>Рубрика: </label>
            <input type="text" id="rubrics" name="rubrics" required style="width: 700px;" value="{{$post->rubrics}}">
        </p>
        <p style="margin-left:200px">
            <label>Фото: </label>
            <input type="text" id="image" name="image" required style="width: 700px;" value="{{$post->image}}">
        </p>
        <p style="margin-left:200px"><input type="submit" value="Изменить" name="submit"></p>
    </form>
@endsection
