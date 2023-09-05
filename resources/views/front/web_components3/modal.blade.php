
<div class="modal fade" id="quick-view-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style = "background-color: var(--primary_color); color: #fff; text-transform: uppercase; letter-spacing: 1px;">
                <h5 class="modal-title fw-bold" >Thông tin sản phẩm</h5>
                <button type="button" class="close btn btn-outline-primary modal-header-btn" data-bs-dismiss="modal" aria-label="Close" style = "border: 1px solid #fff; color: #fff"> <i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="modal-body-left col-lg-5 p-3">
                            <div id="modal-product-img">
                                <img src="img/dell1.webp" style = "display: block; max-width: 300px; max-height: 300px; margin-right: 20px" alt="">
                            </div>
                        </div>
                        <div class="modal-body-right col-lg-7 p-3">
                            <div class="modal-right-header">
                                <span id="modal-product-title" class = "d-block">
                                    Cấu hình Gaming CHICKEN Summer 3050
                                </span>
                                        <span id="modal-product-price"class = "d-inline-block">5.490.000 </span><span class = "modal-price-currency d-inline-block">₫</span>
                            </div>
                            <div class="modal-right-body m-2">
                                <div class="modal-product-info">

                                    <div class = "mb-2">
                                        <span class = "fw-bold">Mô tả:</span>
                                        <span id="modal-short-description"></span>
                                        PC GAMING CHICKEN SUMMER 3050 - CHÀO HÈ CÙNG RTXBặt kịp xu hướng nhập vai cực đỉnh vào các tựa game hiện nay, trở thành người chơi của RTX khi quyết định "xuống tiền" 1 cấu hình gaming mang đầy đủ những hiệu năng và công nghệ đến từ RTX 3000 Series, bạn sẽ bất ngờ khi trải nghiệm chúng.Và để người dùng có thể tìm được những địa chỉ tư vấn và mua máy uy tín, chất lượng, phù hợp với yêu cầu "Máy RTX nhưng giá GTX"
                                    </div>
                                    <div>
                                        <span class = "fw-bold">Thương hiệu: </span><span id="modal-brand">Razer</span>
                                    </div>
                                    <div>
                                        <span class = "fw-bold">Mã sản phẩm: </span><span id="modal-code">112</span>
                                    </div>
                                    <div>
                                        <span class = "fw-bold">Xuất xứ: </span><span id="modal-origin">Trung Quốc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-user-action">
                                <form>
                                    <div class="input-group my-3">
                                        <label for="modal-quantity">
                                            Nhập số lượng:
                                            <input type="number" id="modal-quantity" value="0" class="form-control">
                                        </label>
                                    </div>
                                  </form>
                                <button class="btn btn-outline-primary"  >Thêm vào giỏ hàng</button>
                                <button class="btn btn-outline-primary" >Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style = "background-color: var(--primary_color); border: none;">Đóng</button>
              </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="detail-image-modal" tabindex="-1" aria-labelledby="detail-image-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style = "background-color: var(--primary_color); color: #fff; text-transform: uppercase; letter-spacing: 1px;">
                <h5 class="modal-title fw-bold" >HÌNH ẢNH SẢN PHẨM</h5>
                <button type="button" class="close btn btn-outline-primary modal-header-btn" data-bs-dismiss="modal" aria-label="Close" style = "border: 1px solid #fff; color: #fff"> <i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="image-modal-content">
                        <div class="owl-carousel-product-image-details owl-carousel owl-theme">
                      <!-- <img src="img/dell1.webp" alt="">
                        <img src="img/dell2.webp" alt="">
                        <img src="img/dell3.webp" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style = "background-color: var(--primary_color); border: none;">Đóng</button>
              </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="detail-video-modal" tabindex="-1" aria-labelledby="detail-video-modal" aria-hidden="true" style = "width: fit-content">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style = "background-color: var(--primary_color); color: #fff; text-transform: uppercase; letter-spacing: 1px;">
                <h5 class="modal-title fw-bold" >VIDEO SẢN PHẨM</h5>
                <button type="button" class="close btn btn-outline-primary modal-header-btn" data-bs-dismiss="modal" aria-label="Close" style = "border: 1px solid #fff; color: #fff"> <i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="video-modal-content">
                        <div class="">
                        <iframe id = "modal-video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style = "background-color: var(--primary_color); border: none;">Đóng</button>
              </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="detail-description-modal" tabindex="-1" aria-labelledby="detail-description-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style = "background-color: var(--primary_color); color: #fff; text-transform: uppercase; letter-spacing: 1px;">
                <h5 class="modal-title fw-bold" >MÔ TẢ SẢN PHẨM</h5>
                <button type="button" class="close btn btn-outline-primary modal-header-btn" data-bs-dismiss="modal" aria-label="Close" style = "border: 1px solid #fff; color: #fff"> <i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="description-content">
                        <h4>Thông tin sản phẩm</h4>
                        <div class="description-modal">
                            MÔ TẢ SẢN PHẨM
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style = "background-color: var(--primary_color); border: none;">Đóng</button>
              </div>
        </div>
    </div>
</div> 

