@extends('front-end.master')
@section('title')
    HOME
@endsection
@section('body')
    <div class="banner">
        <div class="container">
            <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
                <h3>Free Online Venue Booking</h3>
                {{--<h4>Up to <span>50% <i>Off/-</i></span></h4>--}}
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner-info1">
                                    <p>you can Find hotel from here</p>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner-info1">
                                    <p>You can Find here Party Center</p>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner-info1">
                                    <p>You Can Find resort here</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="{{asset('/')}}/front-end/js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->

    <!-- //banner-bottom -->
    <!-- collections -->
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">New Post</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">New Post.</p>
            <div class="col-md-12">
                @foreach($allPost as $post)
                    <div class="new-collections-grids">

                        <div class="col-md-3 new-collections-grid">
                            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                                <div class="new-collections-grid1-image">
                                    <a href="{{ route('post-details', ['id'=>$post->id]) }}" class="product-image"><img
                                                src="{{asset($post->image1)}}" alt=" " class="img-responsive"/></a>
                                    <div class="new-collections-grid1-image-pos">
                                        <a href="{{ route('post-details', ['id'=>$post->id]) }}">Quick View</a>
                                    </div>

                                </div>
                                <h4 style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width:100%;">
                                    <a href="{{ route('post-details', ['id'=>$post->id]) }}">{{ $post->name }}</a>
                                </h4>
                                <p>{{ $post->address }}</p>
                                <p>{{ $post->short_description }}</p>
                         

                                    <div class="">
                                        <h4><span class="item_price">TK.
                                                {{ $post->rent }}
                                        </span></h4>
                                    </div>
                              
                            </div>

                        </div>

                    </div>
                   
                @endforeach
            </div>
            {{ $allPost->links() }}
        </div>
    </div>
    <!-- //collections -->
    <!-- new-timer -->

@endsection