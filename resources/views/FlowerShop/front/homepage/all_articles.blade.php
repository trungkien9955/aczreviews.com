@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="articles-section">
    <div class="container overflow-hidden">
        <div class="articles-wrapper">
            <div class="articles-header">
                <h5>Tất cả bài viết ({{$count}})</h5>
            </div>
            <div class="articles-content">
                @foreach($articles as $article)
                <div class="news-item-wrapper">
                    <a href="{{url('/article/'.$article['id'])}}">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images-3/banner_images/home-slider-1.jpg')}}" alt="">
                            </div>
                                <div class="col-lg-8 col-md-8 col-xs-12">
                                    <div class="news-item-title">
                                        <p>{{$article['desc']}}</p>
                                    </div>
                                    <div class="news-item-author">
                                    <i class="fa-solid fa-user"></i>
                                    <span>{{$article['author']}}</span>
                                    </div>
                                    <div class="article-date">
                                        <span>{{$article['created_at']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection