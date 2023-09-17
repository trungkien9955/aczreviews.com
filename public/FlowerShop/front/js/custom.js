$(document).ready(function(){
    $('.size_option').on('click', function(){
       var product_id = $('#product_id').val();
        var size = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "/size-selection",
            data: {product_id: product_id, size:size},
            success: function(resp){
                $('.information-price').html(resp.view);
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
                alert('error');
            }
        })
    })
    $('.color_option').on('click', function(){
        var color = $(this).val();
        // alert(color);
        var product_id = $('#product_id').val();
         $.ajax({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             method: "post",
             url: "/color-selection",
             data: {product_id: product_id, color:color},
             success: function(resp){
                 $image = resp.image;
                 $('.product-detail-image img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
             },
             error: function(){
                 alert('error');
             }
         })
     })
    //  $('.size_option').on('click')
})
