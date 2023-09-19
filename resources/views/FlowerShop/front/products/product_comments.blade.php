@foreach($ajax_rating_info as $rating)
    <div class="review-item mb-2">
        <div class="review-item-author">
            <h6><b>{{$rating['name']}}</b> (Điểm đánh giá: <span style = "color: #e62263;">{{$rating['rating']}}</span>)</h6>
            @if(!empty($rating['created_at']))
            <h6>{{$rating['created_at']}}</h6>
            @else
            <h6>...</h6>
            @endif
        </div>
        <div class="review-item-content">
            <p>{{$rating['comment']}} </p>
        </div>
    </div>
@endforeach
<!-- <h1>hello</h1> -->
