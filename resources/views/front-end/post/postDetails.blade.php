@extends('front-end.master')
@section('title')
    Post Details
@endsection
@section('body')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                </li>
                <li class="active">Single Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <h3 class="text-center text-success" id="xyz">{{ Session::get('msg') }}</h3>
    <!-- single -->
    <div class="single">
        <div class="container">
            <div class="col-md-4 products-left">

                <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                    <h3>Categories</h3>
                    <ul class="cate">
                        <li><a href="{{ route('type-post',['type'=>'corporate']) }}">Corporate</a></li>
                        <li><a href="{{ route('type-post',['type'=>'personal']) }}">personal</a></li>
                        <li><a href="{{ route('type-post',['type'=>'custom']) }}">Custom</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-8 single-right">
                <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset($post->image2) }}">
                                <div class="thumb-image"><img src="{{ asset($post->image2) }}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                            <li data-thumb="{{ asset($post->image3) }}">
                                <div class="thumb-image"><img src="{{ asset($post->image3) }}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                            <li data-thumb="{{ asset($post->image4) }}">
                                <div class="thumb-image"><img src="{{ asset($post->image4) }}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                            <li data-thumb="{{ asset($post->image1) }}">
                                <div class="thumb-image"><img src="{{ asset($post->image1) }}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- flixslider -->
                    <script defer src="{{ asset('/') }}/front-end/js/jquery.flexslider.js"></script>
                    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/flexslider.css" type="text/css"
                          media="screen"/>
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function () {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                    <!-- flixslider -->
                </div>
                <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight"
                     data-wow-delay=".5s">

                    <h4>{{ $post->name }}</h4>
                    
                    <p>Rent TK(hours). {{ $post->rent }}
                    </p>
                    <p>Phone No: {{ $post->phone_no }}</p>
                    <p>Email: {{ $post->email }}</p>
                    <p> {{ $post->location }}</p>
                    <p>Address: {{ $post->address }}</p>
                    <p>Type: {{ $post->type }}</p>
                    <p>Posted: {{ $post->created_at }}</p>


                    <div class="description">
                        <h5><i>Description</i></h5>
                        <p>{{ $post->short_description }}</p>
                    </div>
                    <div>
                        <a href="{{ route('booking-now',['postId'=>$post->id ]) }}" class="btn btn-primary btn-block">Book Now </a>
                    </div>

                    <div class="social">
                        <div class="social-left">
                            <p>Share On :</p>
                        </div>
                        <div class="social-right">
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"></a></li>
                                <li><a href="#" class="twitter"></a></li>
                                <li><a href="#" class="g"></a></li>
                                <li><a href="#" class="instagram"></a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <br/>

                </div>

                <div class="clearfix"></div>
                <div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                                                      data-toggle="tab" aria-controls="home"
                                                                      aria-expanded="true">Description</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home"
                                 aria-labelledby="home-tab">
                                <h5>Brief Description</h5>
                                <p>{!! $post->long_description !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>

                <div class="card-body">
                    {{ Form::open(['route'=>'post-comment', 'method'=>'POST']) }}
                    <div class="col-md-10" style="float: left">
                        <input type="text" placeholder="Comment" class="form-control" style="border-radius:1rem"
                               name="comment">
                        <input type="hidden" class="form-control" name="post_id" value="{{ $post->id}}">
                    </div>
                    <div class="col-md-2" style="float: right">
                        <input type="submit" class="form-control btn-primary" name="btn" value="Send">
                    </div>
                    {{ Form::close() }}

                    <table class="table ">
                        @php($i=1)
                        @foreach($postComments as $postComment)
                            <tr>
                                <th width="5%" align="right">{{ $i++ }}</th>
                                <td width="95%">{{ $postComment->comment }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>




    <!-- //single -->
    <!-- single-related-products -->
    <div class="single-related-products">
        <div class="container">
            <h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Posts</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Related posts on same place</p>
            <div class="col-md-12">
            @foreach($relatedPosts as $relatedPost)
                <div class="new-collections-grids">

                    <div class="col-md-3 new-collections-grid">
                        <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <div class="new-collections-grid1-image">
                                <a href="{{ route('post-details', ['id'=>$relatedPost->id]) }}" class="product-image"><img src="{{asset($relatedPost->image1)}}" alt=" " class="img-responsive" /></a>
                                <div class="new-collections-grid1-image-pos">
                                    <a href="{{ route('post-details', ['id'=>$relatedPost->id]) }}">Quick View</a>
                                </div>
                            </div>
                            <h4><a href="{{ route('post-details', ['id'=>$relatedPost->id]) }}">{{ $relatedPost->location }}</a></h4>
                            <p>{{ $relatedPost->address }}</p>
                            <p>{{ $relatedPost->short_description }}</p>
                            <div class="new-collections-grid1-left simpleCart_shelfItem">
                                <p><span class="item_price">TK.{{ $relatedPost->rent }}</span></p>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
            </div>
            {{ $relatedPosts->links() }}
        </div>
    </div>
    <!-- //single-related-products -->
    <script src="{{ asset('/') }}/front-end/js/imagezoom.js"></script>

@endsection