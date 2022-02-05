@extends('layouts/main')
@section('container')

    <h1 class="text-center mb-3">{{ $title }}</h1>


    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="blog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" >Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @if ($posts->count())

        <div class="card mb-5 text-center shadow" style="">
            {{-- {{ $posts[0]->category->name }} --}}
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <h3 class="card-title"> <a class="text-decoration-none text-dark"
                        href="post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        <p>By. <a href="/authors/{{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                            <a href="/categories/{{ $posts[0]->Category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->Category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)


                    <div class="col-md-4 mb-5">

                        <div class="card shadow">
                            <a href="/categories/{{ $post->Category->slug }}">
                                <div class="position-absolute  px-3 py-2 p-3 text-white btn btn-hover"
                                    style="background-color:rgba(0, 0, 0, 0.61)">
                                    {{ $post->category->name }}</div>
                            </a>

                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post['title'] }}</h5>

                                <small class="text-muted">
                                    <p>By. <a href="/authors/{{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans() }}
                                </small>

                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4 text"></p>

    @endif

    <br>
    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>

            </h2>

            <p>By. <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->Category->slug }}"
                    class="text-decoration-none">{{ $post->Category->name }}
            </p></a>



            {{-- <h5>By : {{ $post->author }}</h5> --}}
    {{-- <p>{{ $post->excerpt }}</p>

            <a href="/post/{{ $post->slug }}">Read more..</a>
        </article>
    @endforeach --}}

@endsection
