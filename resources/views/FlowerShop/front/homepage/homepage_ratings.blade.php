@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="homepage-ratings-section">
    <div class="container overflow-hidden">
        <div class="homepage-ratings-wrapper">
            <div class="homepage-ratings-header">
                <h5>Phản hồi của khách hàng ({{$count}})</h5>
            </div>
            <div class="homepage-ratings-content">
                @foreach($homepage_ratings as $rating)
                <div class="col-lg-12 comment-item">
                    <div class="comment-author-image my-1">
                        <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
                    </div>
                    <div class="comment-author-name my-0 py-0">
                        <span>{{$rating['name']}}</span><span style = "margin-left:6px;" class="badge bg-success">Đã mua hàng tại FlowerShop</span>
                    </div>
                    <div class="comment-author-address my-0  py-0">
                        <p><strong>Địa chỉ:</strong> <i>{{$rating['address']}}, &nbsp;{{$rating['ward']}},&nbsp;{{$rating['district']}},&nbsp;{{$rating['province']}},</i></p>
                    </div>
                    <div class="comment-content mt-2">
                        <p>"{{$rating['feedback']}}"</p>
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection