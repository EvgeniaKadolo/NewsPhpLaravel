@extends('layouts.layout')
@section('header')
    <header>
        <h4>{{$statya->rubrics}}</h4>
        <article>
            <div class="twelve columns">
                <h1>{{$statya->title}}</h1>
                <p class="excerpt">
                    {{$statya->lid}}
                </p>
            </div>
        </article>
    </header>
@endsection
@section('section')
    <section class="section_light">
        <div class="row">
            <p><img src="{{asset('images/'.$statya->image)}}" alt="desc" width=400 align=left hspace=30>
                {{$statya->content}}
            </p>
        </div>
    </section>
@endsection
