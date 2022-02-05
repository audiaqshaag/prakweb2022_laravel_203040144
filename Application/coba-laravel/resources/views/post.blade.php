@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <article>

                    <h2 class="mb-3">{{ $post->title }}</h2>
                    {{-- <h5>{{ $post['author'] }}</h5> --}}
                    <p>By. <a class="text-decoration-none" href="">{{ $post->author->name }}</a> in <a
                            href="/categories/{{ $post->Category->slug }}">{{ $post->Category->name }}</p></a>

                        <img class="img-fluid " src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">

                        <article class="my-3 fs-5">
                            {!! $post->body !!}

                        </article>
                  


                </article>

                <a href="/blog">Back to Post</a>
            </div>
        </div>

    </div>


@endsection
