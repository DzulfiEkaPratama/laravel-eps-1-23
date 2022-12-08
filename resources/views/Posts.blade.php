@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/Posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>



@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
            class="img-fluid">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
    @endif

    <div class="card-body text-center">
        <h3 class="card-title"><a href="/Posts?category={{ $posts[0]->slug }}"
                class="text-decoration-none text-dark">{{ $posts[0]->title }}</h3></a>
        <p>
            <small class="text-muted">
                By. <a href="/Posts?author={{ $posts[0]->author->username }}"
                    class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                in <a href="/Posts?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/Posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

    </div>
</div>


<div class="container text-dark">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-5">
            <div class="card border">

                <div class="position-absolute bg-dark px-3 py-2">
                    <a href="/Posts?category={{ $post->category->slug }}"
                        style="text-decoration: none; color: white;"><a
                            href="/Posts?category{{ $post->category->slug }}" class="text-white text-decoration-none">
                            {{ $post->category->name }}</a>
                </div>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid">
                @else
                <img src="https://source.unsplash.com/featured/1200x400/?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/Posts?author={{ $post->author->username }}"
                                class="text-decoration-none">{{ $post->author->name }}
                            </a>{{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post found.</P>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>

@endsection
