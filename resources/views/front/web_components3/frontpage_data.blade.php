<?php
include('includes/connect.php');
?>
<div id = "upData">
    <section class="blockSection blockPD">
        <div class="container">
            <div class="wapperPDHome">
                <div class="blockTitle">
                    <a href="">
                        <h2>PC GAMING</h2>
                    </a>
                    <ul class="notStyle navBlock">
                        <li>
                            <a>Cấu hình Grandma Shark</a>
                        </li>
                        <li>
                            <a>Cấu hình Mommy Shark</a>
                        </li>
                        <li>
                            <a>Cấu hình Daddy Shark</a>
                        </li>
                        <li class = "hidden-xs">
                            <a>PC Giả lập NOX</a>
                        </li>
                        <li class = "hidden-xs">
                            <a>Xem tất cả</a>
                        </li>
                    </ul>
                </div>
                <div class="blockContent">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 blockColumn left">
                            <div class="wrap">
                                <div class="productsBlock">
                                    <div class="slidePHHome owl-carousel owl-carousel-product">
                                        
                                        <?php
                                        $pc_gaming_query = 'select * from pc_gaming';
                                        $pc_gaming_query_result = mysqli_query($con, $pc_gaming_query);
                                        while($pc_gaming_query_row = mysqli_fetch_assoc($pc_gaming_query_result)) {
                                            $pc_gaming_img = $pc_gaming_query_row['product_card_img'];
                                            $pc_gaming_title = $pc_gaming_query_row['product_title'];
                                            $pc_gaming_price = $pc_gaming_query_row['product_new_price'];
                                            $pc_gaming_code = $pc_gaming_query_row['product_code'];
                                            $pc_gaming_brand = $pc_gaming_query_row['product_brand'];

                                            echo "
                                <div class='productItem'>
                                        <div class='pdLoopItem animated zoomin'>
                                            <div class='itemLoop clearfix'>
                                                <div class='pdLoopImg imageHovers'>
                                                    <a href='/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16' aria-label='Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16' class='product-link'>
                                                        <img src='img/pc_gaming/$pc_gaming_img' alt=''>
                                                    </a>
                                                    <div class='pdLoopAction'>
                                                        <div class='listAction'>
                                                            <a href='#' onclick='return false;' class='btnLoop btnCompare' data-compare='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' data-id='1043126803' title='So sánh'><i class='fa fa-compress' aria-hidden='true'></i> <span class='btn-check'></span></a>
                                                            <a href='#' onclick='return false;' class='btnLoop btn-quickview-1' data-handle='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' data-placement='left' title='Xem nhanh' id='ajax_button' data-modal_code='111' data-bs-toggle='modal' data-bs-target='#quick-view-modal'><i class='fa fa-search-plus' aria-hidden='true'></i></a>
                                                            <a href='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' class='btnLoop view_product' data-toggle='tooltip' data-placement='left' title='Xem chi tiết'><i class='fa fa-eye-slash' aria-hidden='true'></i></a>
                                                            <a href='#' onclick='return false;' class='add-cart btnLoop Addcart' data-variantid='1094403578' title='Thêm vào giỏ'><i class='fa fa-shopping-bag' aria-hidden='true'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='phLoopDetail text-center clearfix'>
                                                    <h3 class='pdLoopName'>
                                                        <a href='' class='productName product-link'>
                                                        $pc_gaming_title
                                                        </a>
                                                    </h3>
                                                    <p class='pdPrice'>
                                                        <span> $pc_gaming_price đ</span>
                                                    </p>
                                                    <div class='pdLoopListView'>
                                                        <ul>
                                                            <li>
                                                                <strong>Mã sản phẩm</strong>
                                                                <span> $pc_gaming_code</span>
                                                            </li>
                                                            <li>
                                                                <strong>Thương hiệu</strong>
                                                                <span>  $pc_gaming_brand</span>
                                                            </li>
                                                        </li>
                                                        <li>
                                                            <strong>Mô tả ngắn</strong>
                                                            <span class = 'short-des'>Dung lượng lưu trữ 8GB</span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                               ";
                                        }
                                        ?>
                                        

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class = "blockSection blockPD">
        <div class="container">
            <div class="wapperPDHome">
                <div class="blockTitle">
                    <a href="">
                        <h2>PC Văn phòng</h2>
                    </a>
                    <ul class="notStyle navBlock">
                        <li>
                            <a href="">Máy bộ để bàn</a>
                        </li>
                        <li>
                            <a href="">Máy bộ mini</a>
                        </li>
                        <li>
                            <a href="">Xem tất cả</a>

                        </li>
                    </ul>
                </div>
                <div class="blockContent">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-sx-12 blockColumn left">
                            <div class="wrap">
                                <div class="bannerBlock imageHover">
                                    <a href="">
                                        <img src="img/banner_product_home_2.webp" alt="">
                                    </a>
                                </div>
                                <div class="productsBlock">
                                    <div class="slidePDHome owl-carousel owl-carousel-product">
                                        
                                    <?php
                                        $pc_office_query = 'select * from pc_office';
                                        $pc_office_query_result = mysqli_query($con, $pc_office_query);
                                        while($pc_office_query_row = mysqli_fetch_assoc($pc_office_query_result)) {
                                            $pc_office_img = $pc_office_query_row['product_card_img'];
                                            $pc_office_title = $pc_office_query_row['product_title'];
                                            $pc_office_price = $pc_office_query_row['product_new_price'];
                                            $pc_office_code = $pc_office_query_row['product_code'];
                                            $pc_office_brand = $pc_office_query_row['product_brand'];

                                            echo "
                                <div class='productItem'>
                                        <div class='pdLoopItem animated zoomin'>
                                            <div class='itemLoop clearfix'>
                                                <div class='pdLoopImg imageHovers'>
                                                    <a href='/products/ram-pc-corsair-vengeance-rgb-pro-8gb-3000mhz-ddr4-1x8gb-cmw8gx4m1d3000c16' aria-label='Ram PC Corsair Vengeance RGB Pro 8GB 3000Mhz DDR4 (1x8GB) CMW8GX4M1D3000C16' class='product-link'>
                                                        <img src='img/pc_office/$pc_office_img' alt=''>
                                                    </a>
                                                    <div class='pdLoopAction'>
                                                        <div class='listAction'>
                                                            <a href='#' onclick='return false;' class='btnLoop btnCompare' data-compare='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' data-id='1043126803' title='So sánh'><i class='fa fa-compress' aria-hidden='true'></i> <span class='btn-check'></span></a>
                                                            <a href='#' onclick='return false;' class='btnLoop btn-quickview-1' data-handle='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' data-placement='left' title='Xem nhanh' id='ajax_button' data-modal_code='111' data-bs-toggle='modal' data-bs-target='#quick-view-modal'><i class='fa fa-search-plus' aria-hidden='true'></i></a>
                                                            <a href='/products/laptop-dell-vos-3405-p132g002abl-ryzen-3-3250u-8gb-1tb-amd-radeon-graphics-14-fhd-win-10hsl-black' class='btnLoop view_product' data-toggle='tooltip' data-placement='left' title='Xem chi tiết'><i class='fa fa-eye-slash' aria-hidden='true'></i></a>
                                                            <a href='#' onclick='return false;' class='add-cart btnLoop Addcart' data-variantid='1094403578' title='Thêm vào giỏ'><i class='fa fa-shopping-bag' aria-hidden='true'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='phLoopDetail text-center clearfix'>
                                                    <h3 class='pdLoopName'>
                                                        <a href='' class='productName product-link'>
                                                        $pc_office_title
                                                        </a>
                                                    </h3>
                                                    <p class='pdPrice'>
                                                        <span> $pc_office_price đ</span>
                                                    </p>
                                                    <div class='pdLoopListView'>
                                                        <ul>
                                                            <li>
                                                                <strong>Mã sản phẩm</strong>
                                                                <span> $pc_office_code</span>
                                                            </li>
                                                            <li>
                                                                <strong>Thương hiệu</strong>
                                                                <span>  $pc_office_brand</span>
                                                            </li>
                                                        </li>
                                                        <li>
                                                            <strong>Mô tả ngắn</strong>
                                                            <span class = 'short-des'>Dung lượng lưu trữ 8GB</span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                               ";
                                        }
                                        ?>
                                    


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