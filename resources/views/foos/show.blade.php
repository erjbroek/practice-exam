@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary" >
        <div class="hero-body">
            <div class="container">
{{--                <p class="title is-2">{{$post->title}}</p>--}}
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
{{--                        <p>Published at: {{ $post->published_at }}</p>--}}

{{--                        {!! $post->body !!}--}}
                        <h1>{{$article->name}}</h1>
                        <h1>{{$article->wombat}}</h1>
                        <h1>{{$article->thud}}</h1>
                        <br>
                        <h2>{{$article->created_at}}</h2>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection



