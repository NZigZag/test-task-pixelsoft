@extends('front.layouts.layout')
@section('title')Cabinet @parent @endsection

@section('content')
<section class="wrapper-cabinet-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-page">The posts were created by {{ $user->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wrap-add-post">
                <form method="POST" action="{{ route('post.store') }}">
                    <h2>Add post</h2>
                    @csrf
                    <div class="form-group clearfix">
                        <label for="title">Title:</label>
                        <input id="title"
                               type="text"
                               class="@error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') }}"
                               required
                        >
                    </div>
                    <div class="form-group clearfix">
                        <label for="description">Description:</label>
                        <textarea name="description"
                                  id="description"
                                  class="@error('description') is-invalid @enderror"
                                  value="{{ old('description') }}"
                                  required
                        ></textarea>
                    </div>
                    <div class="form-group clearfix">
                        <label for="published_at">Date publication:</label>
                        <input id="published_at"
                               type="text"
                               class="@error('published_at') is-invalid @enderror"
                               name="published_at"
                               autocomplete="off"
                               value="{{ old('published_at') }}"
                               required
                        >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-add-post">Add</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
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
@push('datePicker')
    <script src="{{ asset('packages/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('packages/lightpick/lightpick.js') }}"></script>
    <script>
        let publishedAt = document.getElementById('published_at');

        let pickerPublishedAt = new Lightpick({
            field: publishedAt,
            singleDate: true,
            format: 'YYYY-MM-DD',
        });
    </script>
@endpush
