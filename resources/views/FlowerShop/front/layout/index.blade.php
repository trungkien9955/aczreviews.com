@extends('front.layout.layout')
@section('content')
<div class="container mt-2">
    <div class=" stats row">
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="stats-item d-flex flex-column">
                <div class="stats-icon"><i class="fa-regular fa-address-book"></i></div>
                <div class="stats-number">----</div>
                <div class="stats-description">Học viên</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="stats-item d-flex flex-column">
                <div class="stats-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="stats-number">---</div>
                <div class="stats-description">Lớp học</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="stats-item d-flex flex-column">
                <div class="stats-icon"><i class="fa-solid fa-square-check"></i></div>
                <div class="stats-number">----</div>
                <div class="stats-description">Chứng chỉ đã cấp</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="stats-item d-flex flex-column">
                <div class="stats-icon"><i class="fa-solid fa-user-tie"></i></div>
                <div class="stats-number">---</div>
                <div class="stats-description">Giáo viên bản xứ</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="block-title">
    <h2>HỌC VIÊN NỔI BẬT</h2>
    <div class="block-link">
      <ul class="block-link-list">
        <li>Trẻ em</li>
        <li>Người lớn</li>
        <li>Sinh viên</li>
      </ul>
    </div>
  </div>
  <div class="block-content">

  </div>
</div>
<div class="outer-container"style = "background-color: black;">
  <div class="container overflow-hidden" style = "background-color: violet;">
    <div class="block1 mt-3" >
      <div class="container" >
        <div class="row" style = "background-color: red; color: white;">ROW 1</div>
        <div class="row" style = "background-color: green; color: white;">ROW 2</div>
        <div class="row" style = "background-color: blue; color: white;">ROW 3</div>
      </div>
    </div>
    <div class="block2 mt-2">
      <div class="container" >
        <div class="row" style = "background-color: red; color: white;">ROW 1</div>
        <div class="row" style = "background-color: green; color: white;">ROW 2</div>
        <div class="row" style = "background-color: blue; color: white;">ROW 3</div>
      </div>
    </div>
    <div class="block3 mt-5">
      <div class="container" >
        <div class="row" style = "background-color: red; color: white;">ROW 1</div>
        <div class="row mt-3" style = "background-color: green; color: white;">ROW 2</div>
        <div class="row mb-3" style = "background-color: blue; color: white;">ROW 3</div>
      </div>
    </div>
    <div class="block4">
      <div class="container" >
        <div class="row" style = "background-color: red; color: white;">ROW 1</div>
        <div class="row " style = "background-color: green; color: white;">ROW 2</div>
        <div class="row" style = "background-color: blue; color: white;">ROW 3</div>
      </div>
    </div>
    <div class="block5 mb-5 " style = "margin-top: 2rem;">
      <div class="container px-2 " >
        <div class="row row-cols-2 gx-2 gy-2 mb-2" style = "background-color: red; color: white;">
          <div class = "col">
            <div style = "background-color: yellow;">COL1</div>
          </div>
          <div class = "col" style = "border: 1px solid blue;">
          <div style = "background-color: yellow;">COL1</div>
          </div>
          <div class = "col" style = "border: 1px solid blue;">
          <div style = "background-color: yellow;">COL1</div>
          </div>
          <div class = "col" style = "border: 1px solid blue;">
          <div style = "background-color: yellow;">COL1</div>
          </div>
          <div class = "col" style = "border: 1px solid blue;">
          <div style = "background-color: yellow;">COL1</div>
          </div>
          <div class = "col mb-3" style = "border: 1px solid blue;">
          <div style = "background-color: yellow;">COL1</div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div>rrerere</div>
  </div>
</div>
<div class="container" style = "background-color: green;">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
<div class="container px-4">
  <div class="row row-cols-2 gx-5 gy-5">
    <div class="col" style = "border: 1px solid blue;">
     <div class="  bg-light" style = "border: 1px solid red;">Custom column padding</div>
    </div>
    <div class="col" style = "border: 1px solid blue;">
      <div class="  bg-light" style = "border: 1px solid red;">Custom column padding</div>
    </div>
    <div class="col" style = "border: 1px solid blue;">
      <div class="  bg-light" style = "border: 1px solid red;">Custom column padding</div>
    </div>
  </div>
</div>
<div class="container" style = "border: 1px solid black;">
  <div class="row">
    <div class="col" style = "border: 1px solid red;">
      Column
    </div>
    <div class="col" style = "border: 1px solid red;">
      Column
    </div>
    <div class="col" style = "border: 1px solid red;">
      Column
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col" style = "border: 1px solid red;">
      1 of 2
    </div>
    <div class="col" style = "border: 1px solid red;">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col" style = "border: 1px solid red;">
      1 of 3
    </div>
    <div class="col" style = "border: 1px solid red;">
      2 of 3
    </div>
    <div class="col" style = "border: 1px solid red;">
      3 of 3
    </div>
  </div>
</div>

<div class="insMain">
<section class="home-product__tab blockSection">
  <div class="container">
    <div class="blockTitle">
      <h2> HỌC VIÊN NỔI BẬT </h2>
      <div class="tab-link">
        <ul class="nav nav-tabs">
          <li>
            <a href="">Trẻ em</a>
          </li>
          <li>
            <a href="">Người lớn</a>
          </li>
          <li>
            <a href="">Sinh viên</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="blockContent">
      <div class="container">
        <div class="  owl-carousel owl-carousel-top-learners">
          <div class="productItem">
            <div class="pdLoopItem animated zoomin">
              <div class="itemLoop clearfix">
                <div class="pdLoopImg imageHovers">
                  <a href="/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16" aria-label="Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16" class="product-link">
                    <img src="{{asset('front/images/learner_images/learner1.jpg')}}" alt="">
                  </a>
                <div class="phLoopDetail text-center clearfix">
                  <h3 class="pdLoopName">
                    <a href="" class="productName product-link"> TÊN KHÓA HỌC </a>
                  </h3>
                  <div class="pdLoopListView">
                    <ul>
                      <li>
                        <strong>Giáo viên</strong>
                        <span> Tên giáo viên</span>
                      </li>
                      </li>
                      <li>
                        <strong>Mô tả</strong>
                        <span class="short-des">Mô tả khóa học</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style = "background-color: red; width: 50px;height: 50px"class="test1">Red</div>
          <div  style = "background-color: green;width: 50px;height: 50px"class="test1">Green</div>
        <div  style = "background-color: blue;width: 50px;height: 50px"class="test1">Blue</div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="insMain">
<section class="home-product__tab blockSection">
  <div class="container">
    <div class="blockTitle">
      <h2> KHÓA HỌC </h2>
      <div class="tab-link">
        <ul class="nav nav-tabs">
          <li>
            <a href="">Trẻ em</a>
          </li>
          <li>
            <a href="">Người lớn</a>
          </li>
          <li>
            <a href="">Sinh viên</a>
          </li>
          <li>
            <a href="">Học sinh</a>
          </li>
          <li>
            <a href="">Người đi làm</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="blockContent">
      <div class="container">
        <div class=" row owl-carousel owl-carousel-top-selling">
          <div class="productItem">
            <div class="pdLoopItem animated zoomin">
              <div class="itemLoop clearfix">
                <div class="pdLoopImg imageHovers">
                  <a href="/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16" aria-label="Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16" class="product-link">
                    <img src="{{asset('front/images/course_images/course4.jpg')}}" alt="">
                  </a>
                <div class="phLoopDetail text-center clearfix">
                  <h3 class="pdLoopName">
                    <a href="" class="productName product-link"> TÊN KHÓA HỌC </a>
                  </h3>
                  <div class="pdLoopListView">
                    <ul>
                      <li>
                        <strong>Giáo viên</strong>
                        <span> Tên giáo viên</span>
                      </li>
                      </li>
                      <li>
                        <strong>Mô tả</strong>
                        <span class="short-des">Mô tả khóa học</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="insMain">
<section class="home-product__tab blockSection">
  <div class="container">
    <div class="blockTitle">
      <h2>CHỨNG CHỈ </h2>
      <div class="tab-link">
        <ul class="nav nav-tabs">
          <li>
            <a href="">Phổ thông</a>
          </li>
          <li>
            <a href="">Học thuật</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="blockContent">
      <div class="container">
        <div class=" row owl-carousel owl-carousel-top-selling">
          <div class="productItem">
            <div class="pdLoopItem animated zoomin">
              <div class="itemLoop clearfix">
                <div class="pdLoopImg imageHovers">
                  <a href="/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16" aria-label="Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16" class="product-link">
                    <img src="{{asset('front/images/certificate_images/certificate1.webp')}}" alt="">
                  </a>
                <div class="phLoopDetail text-center clearfix">
                  <h3 class="pdLoopName">
                    <a href="" class="productName product-link"> TÊN CHỨNG CHỈ </a>
                  </h3>
                  <div class="pdLoopListView">
                    <ul>
                      <li>
                        <strong>Cơ quan cấp</strong>
                        <span> Tên cơ quan cấp</span>
                      </li>
                      </li>
                      <li>
                        <strong>Mô tả</strong>
                        <span class="short-des">Mô tả chứng chỉ</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<section class="home-product__tab blockSection">
  <div class="container">
    <div class="blockTitle">
      <h2>GIÁO VIÊN BẢN XỨ </h2>
      <div class="tab-link">
        <ul class="nav nav-tabs">
          <li>
            <a href="">Phổ thông</a>
          </li>
          <li>
            <a href="">Học thuật</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="blockContent">
      <div class="container">
        <div class=" row owl-carousel owl-carousel-top-teachers">
          <div class="productItem">
            <div class="pdLoopItem animated zoomin">
              <div class="itemLoop clearfix">
                <div class="pdLoopImg imageHovers">
                  <a href="/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16" aria-label="Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16" class="product-link">
                    <img src="{{asset('front/images/teacher_images/teacher1.jpg')}}" alt="">
                  </a>
                <div class="phLoopDetail text-center clearfix">
                  <h3 class="pdLoopName">
                    <a href="" class="productName product-link"> TÊN CHỨNG CHỈ </a>
                  </h3>
                  <div class="pdLoopListView">
                    <ul>
                      <li>
                        <strong>Cơ quan cấp</strong>
                        <span> Tên cơ quan cấp</span>
                      </li>
                      </li>
                      <li>
                        <strong>Mô tả</strong>
                        <span class="short-des">Mô tả chứng chỉ</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="comment container">
    <div class="comment-header row  ">
        <div class="col-lg-12 m-2">
            <div class="comment-header ">
            <h2>NHẬN XÉT CỦA PHỤ HUYNH VÀ HỌC VIÊN </h2>
            </div>
        </div>
    </div>
    <div class="comment-header row  ">
        <div class="col-lg-12">
            <div class="comment-header m-2 ">
            <h3>NHẬN XÉT CỦA PHỤ HUYNH VÀ HỌC VIÊN </h3>
            </div>
        </div>
    </div>
    <div class="comment-item row m-2">
        <div class="col-lg-12">
            <div class="comment-author-image my-1">
                <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
            </div>
            <div class="comment-author-name my-0 py-0">
                <span>NGUYỄN LỆ THỦY</span>
            </div>
            <div class="comment-author-address my-0  py-0">
                <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
            </div>
            <div class="comment-content mt-2">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
        </div>
    </div>
    <div class="comment-item row m-2">
        <div class="col-lg-12">
            <div class="comment-author-image my-1">
                <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
            </div>
            <div class="comment-author-name my-0 py-0">
                <span>NGUYỄN LỆ THỦY</span>
            </div>
            <div class="comment-author-address my-0  py-0">
                <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
            </div>
            <div class="comment-content mt-2">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
        </div>
    </div>
    <div class="comment-item row m-2">
        <div class="col-lg-12">
            <div class="comment-author-image my-1">
                <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
            </div>
            <div class="comment-author-name my-0 py-0">
                <span>NGUYỄN LỆ THỦY</span>
            </div>
            <div class="comment-author-address my-0  py-0">
                <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
            </div>
            <div class="comment-content mt-2">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
        </div>
    </div>
    <a style = "text-decoration: underline; margin-left:10px;"href="">Xem tất cả</a>
</div>
<div class="news container mt-2">
    <div class="news-header row pt-3">
      <h2>TIN TỨC, EVENT, CẨM NANG HỌC TIẾNG ANH </h2>
    </div>
    <div class="news-content row pt-3">
        <div class="news-item col-lg-6 col-xs-12">
            <div class="news-item-image">
                <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images/news_images/news-image1.jpg')}}" alt="">
            </div>
            <div class="news-item-title pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="news-item col-lg-6 col-xs-1">
            <div class="news-item-image">
                <img style = "max-height: 360px; border-radius:6px;" src="{{asset('front/images/news_images/news-image2.jpg')}}" alt="">
            </div>
            <div class="news-item-title pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <a style = "text-decoration: underline;"href="">Xem tất cả</a>
</div>
<div class="container test">
  <div class="owl-carousel owl-carousel-test">
    <div style = "background-color: red; width: 50px;height: 50px"class="test1">Red</div>
    <div  style = "background-color: green;width: 50px;height: 50px"class="test1">Green</div>
    <div  style = "background-color: blue;width: 50px;height: 50px"class="test1">Blue</div>
  </div>
</div>
@endsection