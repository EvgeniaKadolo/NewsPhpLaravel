@extends('layouts.layout')
@section('header')
    <h1>{{$header}}</h1>
@endsection
@section('section')
    <section>
        <div class="section_main">
            <div class="row">
                <section class="eight columns">
                    <h3>{{$title}}</h3>
                    @if (!empty($rubric->toArray()))
                        @foreach($rubric as $r)
                            <article class="blog_post">
                                <div class="three columns">
                                    <a href="#" class="th"><img src="{{asset('images/'.$r->image)}}" alt="desc"/></a>
                                </div>
                                <div class="nine columns">
                                    <a href="/statya/{{$r->id}}">
                                        <h4>{{$r->title}}</h4>
                                    </a>
                                    <p>{{$r->lid}}</p>
                                    @canany(['delete', 'edit'])
                                        <form action="{{route('delete', $r->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Удалить">
                                        </form>
                                        <a href="/change/{{$r->id}}">
                                            <input type="submit" value="Редактировать">
                                        </a>
                                    @endcan
                                </div>
                            </article>
                        @endforeach
                    @endif
                </section>
                @can('store')
                    <section class="four columns">
                        <H3> &nbsp; </H3>
                        <div class="panel">
                            <h3>Админ-панель</h3>
                            <ul class="accordion">
                                <li class="active">
                                    <div class="title">
                                        <a href="/add">
                                            <h5>Добавить статью</h5>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                @endcan
            </div>
        </div>
    </section>

    <!-- ######################## Section ######################## -->

    <section>
        <div class="section_dark">
            <div class="row">
                <h2></h2>
                <div class="two columns">
                    <img src="{{asset('images/thumb1.jpg')}}" alt="desc"/>
                </div>

                <div class="two columns">
                    <img src="{{asset('images/thumb2.jpg')}}" alt="desc"/>
                </div>

                <div class="two columns">
                    <img src="{{asset('images/thumb3.jpg')}}" alt="desc"/>
                </div>

                <div class="two columns">
                    <img src="{{asset('images/thumb4.jpg')}}" alt="desc"/>
                </div>

                <div class="two columns">
                    <img src="{{asset('images/thumb5.jpg')}}" alt="desc"/>
                </div>

                <div class="two columns">
                    <img src="{{asset('images/thumb6.jpg')}}" alt="desc"/>
                </div>
            </div>
        </div>
    </section>
@endsection
