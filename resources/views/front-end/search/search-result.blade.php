@extends('front-end.master')
@section('title')
    Search Result
@endsection
@section('body')
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Search Result</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">your Search result</p>
            <div class="col-md-12">
                @foreach($allPost as $post)

                    <div class="new-collections-grids">

                        <div class="col-md-3 new-collections-grid">
                            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                                <div class="new-collections-grid1-image">
                                    <a href="{{ route('post-details', ['id'=>$post->id]) }}" class="product-image"><img src="{{asset($post->image1)}}" alt=" " class="img-responsive" /></a>
                                    <div class="new-collections-grid1-image-pos">
                                        <a href="{{ route('post-details', ['id'=>$post->id]) }}">Quick View</a>
                                    </div>

                                </div>
                                <h4><a href="{{ route('post-details', ['id'=>$post->id]) }}">{{ $post->location }}</a></h4>
                                <p>{{ $post->address }}</p>
                                <p>{{ $post->short_description }}</p>
                                <div class="new-collections-grid1-left simpleCart_shelfItem">
                                    <p><span class="item_price">TK.{{ $post->rent }}</span></p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
            {{ $allPost->links() }}
    </div>
    </div>

@endsection