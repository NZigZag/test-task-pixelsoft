@extends('front.layouts.layout')
@section('title')Home @parent @endsection

@section('content')
<section class="wrapper-posts-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-page">All the posts</h1>
            </div>
        </div>
        <div class="row">
            @if($posts->count() > 1)
                <div class="col-12 wrap-sort-order-post">
                    <form method="GET" action="{{ route('home') }}">
                        <label for="select-sort-order">Sort by date published:</label>
                        <input type="hidden" name="page" value="{{ $posts->currentPage() }}">
                        <select name="sort" id="select-sort-order">
                            <option value="asc" @if(request()->query('sort') === "asc") selected @endif>asc</option>
                            <option value="desc" @if(request()->query('sort') === "desc") selected @endif>desc</option>
                        </select>
                    </form>
                </div>
            @endif
            @forelse($posts as $post)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 wrap-item-post">
                    <div class="item-post">
                        <div class="image-post">
                            <img src="{{ asset("images/no-image.png") }}" alt="{{ $post->title }}">
                        </div>
                        <div class="info-post clearfix">
                            <span class="author-post">{{ $post->user->name }}</span>
                            <span class="date-publication-post">{{ $post->published_at }}</span>
                        </div>
                        <div class="title-post">
                            <a href="#">{{ $post->title }}</a>
                        </div>
                        <div class="description-post">
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No posts</p>
                </div>
            @endforelse
            @if($posts)
                <div class="col-12 wrap-pagination-post">
                    {{ $posts->links('vendor.pagination.default') }}
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
