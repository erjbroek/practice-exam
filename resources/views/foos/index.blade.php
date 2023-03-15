@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Foo</p>
                <p class="subtitle is-3">This is foo</p>

            </div>
        </div>
    </section>

    <section class="section">

        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/foo/create" class="button is-primary">Add a new article...</a>
                        </div>

                        <div class="column is-12">



                            @foreach($articles as $article)

                                @if($article->wombat)
                                    <div class="panel" style="background-color: #00C9FF">
                                @else
                                            <div class="panel">
                                @endif

                                    <a class="panel-block" href="{{ route('foo.show', $article) }}">
                                        <article class="media">
                                            <figure class="media-left">

                                            </figure>
                                            <div class="media-content">

                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $article->name }}</strong>
                                                        <small>{{ $article->thud }}</small>
                                                        <br>
                                                        <small>{{ $article->created_at }}</small>
                                                        <br>
                                                        <br>
                                                        {{ $article->post->title }}
                                                        <br>
                                                        {{$article->getKazaam()}}

                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>

                            @endforeach
                                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>

            </div>


    </section>
@endsection

