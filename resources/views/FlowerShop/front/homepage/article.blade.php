@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="article-section">
    <div class="container overflow-hidden">
        <div class="article-wrapper">
            <div class="article-header">
                <h4>{{$article_details['name']}}</h4>
                <div class="news-item-author">
                    <i class="fa-solid fa-user"></i>
                    <span>{{$article_details['author']}}</span>
                </div>
                <span>{{$article_details['created_at']}}</span>
            </div>
            <div class="article-content">
                <div class="article-desc">
               {{$article_details['desc']}}
                </div>
                <div>
                {!!$article_details['content']!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection