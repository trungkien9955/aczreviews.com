if (window.location.pathname !== '/') {
    $('.dropdown').hide();
    $('.nav-sidebar-head').hover(function(){
        $('.dropdown').show();
    })
    $('.dropdown').hover(function(){
        $('.dropdown').show();
    })
    $('.nav-sidebar-head').mouseleave(function(){
        $('.dropdown').hide();
    })
    $('.dropdown').mouseleave(function(){
        $('.dropdown').hide();
    })
}else{
    $('.dropdown').show();
}
var windowWidth = $(window).width();
if ( windowWidth < 600 ) {
    $('.nav-sidebar-head').on('click', function(){
        $('.dropdown').css("left", "0");
    })
}
$(document).ready(function(){
    $('.size_option').on('click', function(){
       var product_id = $('#product_id').val();
        var size = $(this).val();
        var color = $('.color_option:checked').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "/size-selection",
            data: {product_id: product_id, size:size, color:color},
            success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                // alert(resp); return false;
                $('.information-price').html(resp.view);
                $('.info-code .attr-sku').html(resp.attr_sku);

                if(resp.attr_stock > 0) {
                    $('.info-stock span.stock-data').html(resp.attr_stock);
                    $('.stock-check').html("<span style = 'color: #5CB85C;font-weight: 700;'>Còn hàng</span>");
                }else{
                    $('.info-stock span.stock-data').html("0");
                    $('.stock-check').html("<span style = 'color: #e02027;font-weight: 700;' >Tạm hết hàng</span>");
                }
                // $('.easyzoom1 a').attr('href',"/FlowerShop/front/images-3/product_images/large/" + $image)
                // $('.product-detail-image img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
            },
            error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                alert('error');
            }
        })
    })
    $('.color_option').on('click', function(){
        var color = $(this).val();
        var size = $('.size_option:checked').val();
        // alert(size);return false;
        var product_id = $('#product_id').val();
         $.ajax({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             method: "post",
             url: "/color-selection",
             data: {product_id: product_id, color:color, size:size},
             success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                 $image = resp.image;
                 $('.product-detail-image-container img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
                 $('.information-price').html(resp.view);
                 $('.info-code .attr-sku').html(resp.attr_sku);
                 if(resp.attr_stock > 0) {
                    $('.info-stock span.stock-data').html(resp.attr_stock);
                    $('.stock-check').html("<span style = 'color: #5CB85C;font-weight: 700;'>Còn hàng</span>");
                }else{
                    $('.info-stock span.stock-data').html("0");
                    $('.stock-check').html("<span style = 'color: #e02027;font-weight: 700;' >Tạm hết hàng</span>");
                }
             },
             error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                 alert('error');
             }
         })
     })
     //product comment
})
// $(document).on('click', '.pagination a', function(event){
//     event.preventDefault();
//     var page = $(this).attr('href').split('page=')[1];
//     var product_id = $('#product_id').val();
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         method: "post",
//         url: "/product-comment",
//         data: {product_id: product_id},
//         success:function(resp){
//             $('.review-data-items').html(resp);
//         },
//         error: function(){
//             alert('Error');
//         }
//     })
// })
$(document).on('click', '.info-action .cart-button', function(){
    // event.preventDefault();
    var price_element = $('.info-price h4 span').html();
    var attr_sku = $('.attr-sku').html();
    var price_string = price_element.replace(',', '');
    var price = parseInt(price_string);
    var product_img_src = $('.product-detail-image-container img').attr('src');
    // alert(price);
    $('#cart_form').append(`<input type = "hidden" name = "buy"  value= "not_yet">`);
    $('#cart_form').append(`<input type = "hidden" name = "price" id = "price_${price} "value= "${price}">`);
    $('#cart_form').append(`<input type = "hidden" name = "attr_sku" id = "sku_${attr_sku} "value= "${attr_sku}">`);
    $('#cart_form').append(`<input type = "hidden" name = "product_img_src" id = "img_${attr_sku}" value= "${product_img_src}">`);

})
$(document).on('click', '.info-action .buy-button', function(){
    // event.preventDefault();
    var price_element = $('.info-price h4 span').html();
    var attr_sku = $('.attr-sku').html();
    var price_string = price_element.replace(',', '');
    var price = parseInt(price_string);
    var product_img_src = $('.product-detail-image-container img').attr('src');
    // alert(price);
    $('#cart_form').append(`<input type = "hidden" name = "buy"  value= "yes">`);
    $('#cart_form').append(`<input type = "hidden" name = "price" id = "price_${price} "value= "${price}">`);
    $('#cart_form').append(`<input type = "hidden" name = "attr_sku" id = "sku_${attr_sku} "value= "${attr_sku}">`);
    $('#cart_form').append(`<input type = "hidden" name = "product_img_src" id = "img_${attr_sku}" value= "${product_img_src}">`);
})
$(document).on('click', '.cart-item-delete-btn', function(){
    $confirm = confirm('Xóa sản phẩm này khỏi giỏ hàng?')
    if($confirm)
    var cart_item_id = $(this).data('cart-item-id');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'post',
        url: '/cart/delete',
        data: {cart_item_id: cart_item_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $('.cart-table-container').html(resp.view);
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$('#register_form').submit(function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/register',
        data:form_data,
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp.type == "error"){
                $.each(resp.errors, function(i, error){
                    $('#login_'+i+'_error').attr('style', 'color:red');
                    $('#login_'+i+'_error').html(error);
                    setTimeout(function(){
                        $('#login_'+i+'_error').css({
                            'display': 'none'
                        })
                    }, 3000)
                })
            }else if (resp.type == "inactive"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "incorrect"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "success"){
                $('#register_success_message').html(resp.message);
                $('#register_success_message').addClass('alert alert-success');
                setTimeout(function(){
                    window.location.href = resp.url;
                }, 5000)
            }
        },
        error: function(){
            alert('error');
        }
    })
})
$('#login_form').submit(function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    // form_data = JSON.stringify(form_data);
    console.log(form_data);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/login',
        data:form_data,
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.type == "error"){
                $.each(resp.errors, function(i, error){
                    $('#login_'+i+'_error').attr('style', 'color:red');
                    $('#login_'+i+'_error').html(error);
                    setTimeout(function(){
                        $('#login_'+i+'_error').css({
                            'display': 'none'
                        })
                    }, 3000)
                })
            }else if (resp.type == "inactive"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "incorrect"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "success"){
                $("#ajax_loading_overlay").fadeOut(300);
                alert(resp);
                window.location.href = resp.url;
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$(document).on('click', '.user-logout-btn', function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/logout',
        success: function(){
            // alert(resp);
            $("#ajax_loading_overlay").fadeOut(300);
        },
        error: function(){
            alert('error');
        }
    })
})
$('#vat_invoice').on('change', function(){
    if(this.checked) {
        $('#invoice-info').html('<input type="text" class="form-control"  name = "tax_code" id = "tax_code" placeholder = "Mã số thuế"><input type="text" class="form-control"  name = "invoice_name" id = "invoice_name" placeholder = "Tên công ty"><input type="text" class="form-control"  name = "invoice_address" id = "invoice_address" placeholder = "Địa chỉ">');
    }else{
        $('#invoice-info').html('');
    }
})
$('#province').on('change', function(){
    $('#district option').remove();
    $('#ward option').remove();
    var province_id = $('#province option:selected').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/province-selected',
        data: {province_id:province_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $.each(resp, function(i){
                $('#district').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
            })
            
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$('#district').on('change', function(){
    $('#ward option').remove();
    var district_id = $('#district option:selected').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/district-selected',
        data: {district_id:district_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $.each(resp, function(i){
                $('#ward').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
            })
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
// $('.coupon-field').on('click', function(){
//     alert('hi');
// })

//check coupon in cart page
$(document).on('click', '#coupon-submit-btn', function(){
     var coupon_code = $('#coupon_code').val();
     $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/coupon-code',
        data: {coupon_code:coupon_code},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp.case == "invalid"){
                $('#coupon_message_container').html(`<div class = "alert alert-danger alert-dismissible fade show" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`)
            }else if(resp.case == "used"){
                $('#coupon_message_container').html(`<div class = "alert alert-danger alert-dismissible fade show" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`)
            }else if(resp.case == "expired"){
                $('#coupon_message_container').html(`<div class = "alert alert-danger alert-dismissible fade show" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`)
            }else if(resp.case == "valid"){
                if(resp.type == "fixed"){
                    $('#total_price').html(resp.total_price);
                    $('#coupon_message_container').html(`<div class = "alert alert-success alert-dismissible fade show" role = "alert"><strong>Thành công:${resp.success_message}</strong></div>`)
                }else if(resp.type == "Percentage"){
                $('.cart-table-container').html(resp.view);
                $('#coupon_message_container').html(`<div class = "alert alert-success alert-dismissible fade show" role = "alert"><strong>Thành công:${resp.success_message}</strong></div>`)
                }
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$(document).on('click', '.update-quantity', function(){
    if($(this).hasClass('update-quantity-minus')){
        var quantity = $(this).data('quantity');
        if(quantity == 1){
            alert('Số lượng sản phẩm phải lớn hơn 0!');
            return false;
        }else{
            new_quantity = quantity-1;
            var cart_item_id = $(this).data('item-id')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'cart-quantity-minus',
                data: {new_quantity:new_quantity, cart_item_id: cart_item_id},
                success: function(resp){
                    $("#ajax_loading_overlay").fadeOut(300);
                    $('.cart-table-container').html(resp.view);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        }
    }
})
$(document).on('click', '.update-quantity', function(){
   if($(this).hasClass('update-quantity-plus')){
        var quantity = $(this).data('quantity');
        new_quantity = quantity+1;
        var cart_item_id = $(this).data('item-id')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: 'cart-quantity-plus',
            data: {new_quantity:new_quantity, cart_item_id: cart_item_id},
            success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                if(resp.case =="failed_stock"){
                    $('#failed_stock_message_'+cart_item_id).html(`<div class = "alert alert-danger alert-dismissible fade show" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`);
                }
                else if(resp.case =="product"){
                    $('.cart-table-container').html(resp.view);
                }
                else if(resp.case =="attr"){
                    $('.cart-table-container').html(resp.view);
                }
            },
            error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                alert('error');
            }
        })
    }
})
//show and hide quantity confirm button
$(document).on('change','.quantity-input',function(){
    var new_quantity = $(this).val();
    var cart_item_id = $(this).data('item-id');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: 'cart-quantity-change',
        data: {new_quantity:new_quantity, cart_item_id: cart_item_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp.case =="failed_stock"){
                $('#failed_stock_message_'+cart_item_id).html(`<div class = "alert alert-danger alert-dismissible fade show" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`);
            }
            else if(resp.case =="product"){
                $('.cart-table-container').html(resp.view);
            }
            else if(resp.case =="attr"){
                $('.cart-table-container').html(resp.view);
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$(document).on('click', '#subscriber-submit-btn', function(){
    var subscriber_email = $('#subscriber-email').val();
    var mail_format = /\S+@\S+\.\S+/;
    if(subscriber_email.match(mail_format)){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: 'subscriber-email',
            data: {subscriber_email:subscriber_email},
            success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                if(resp.case == "success"){
                    $('#subscriber-email-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.success_message}</strong></div>`);
                }else if (resp.case == "error"){
                    $('#subscriber-email-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`);
                }
            },
            error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                alert('error');
            }
        })
    }else{
        alert('Email không hợp lệ!')
    }
})
$('#user-rating-form').submit(function(event){
    event.preventDefault();
    var product_id = $('#user-rating-form #user_rating_product_id').val();
    var rating = $('#user-rating-form input[name=user_rating]:checked').val();
    var review = $('#user-rating-form #review').val();
    var user_id = $('#user-rating-form #user_rating_user_id').val();
    // alert(user_id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user-rating',
        data: {product_id:product_id, rating:rating, review:review, user_id:user_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.case == "success"){
                $('#user-rating-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.user_rating_success_message}</strong></div>`);
            }else if (resp.case == "error"){
                $('#user-rating-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.user_rating_error_message}</strong></div>`);
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$('#guest-rating-form').submit(function(event){
    event.preventDefault();
    var product_id = $('#guest-rating-form #guest_rating_product_id').val();
    var name = $('#guest-rating-form #review_author').val();
    var email = $('#guest-rating-form #review_email').val();
    var phone = $('#guest-rating-form #review_phone').val();
    var comment = $('#guest-rating-form #comment').val();
    var rating = $('#guest-rating-form input[name=guest_rating]:checked').val();
    // alert(rating); return false;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/guest-rating',
        data: {product_id:product_id, name:name, email:email,phone:phone, comment:comment, rating:rating},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.case == "success"){
                $('#guest-rating-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.guest_rating_success_message}</strong></div>`);
            }else if (resp.case == "error"){
                $('#guest-rating-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.guest_rating_error_message}</strong></div>`);
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})

// gallery
$(document).on('click', '.gallery-image', function(){
    $src = $(this).attr('src');
    $('.product-detail-image').attr('src', $src);
})
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }