@extends('front-end.master')
@section('title')
    Category Post
@endsection
@section('body')
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Search Result</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">your Search result</p>
            @foreach($categoryPosts as $categoryPost)
                <div class="new-collections-grids">

                    <div class="col-md-3 new-collections-grid">
                        <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <div class="new-collections-grid1-image">
                                <a href="{{ route('post-details', ['id'=>$categoryPost->id]) }}" class="product-image"><img src="{{asset($categoryPost->image1)}}" alt=" " class="img-responsive" /></a>
                                <div class="new-collections-grid1-image-pos">
                                    <a href="{{ route('post-details', ['id'=>$categoryPost->id]) }}">Quick View</a>
                                </div>

                            </div>
                            <h4><a href="{{ route('post-details', ['id'=>$categoryPost->id]) }}">{{ $categoryPost->location }}</a></h4>
                            <p>{{ $categoryPost->address }}</p>
                            <p>{{ $categoryPost->short_description }}</p>
                            <div class="new-collections-grid1-left simpleCart_shelfItem">
                                <p><span class="item_price">TK.{{ $categoryPost->rent }}</span></p>
                            </div>
                        </div>

                    </div>


                </div>
            @endforeach
        </div>
    </div>

@endsection