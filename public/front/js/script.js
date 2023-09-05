
  function get_modal_data() {
    $(document).ready(function() {
        $('#quick-view-modal').on('show.bs.modal', function(event) { 
            console.log('hello');
            var product_code_modal = $(event.relatedTarget).data('modal_code');
            $.ajax({
                url: "modal_test.php",
                data: {product_code_modal: product_code_modal},
                dataType: "text",
                method: "POST",
                success: function(response) {
                    console.log(response)
                    console.log(response)
                    $('#modal-product-img').html(response.img) 
                    $('#modal-product-title').text(response.title)
                    $('#modal-product-price').text(response.price)
                    $('#modal-short-description').text(response.description)
                    $('#modal-brand').text(response.brand)
                    $('#modal-code').text(response.code)
                    $('#modal-origin').text(response.origin)
                }
            })
        });
    })      
}
$(document).ready(function(){
        $('.owl-carousel-top-teachers').on('hover', function(){
            console.log('hello');
        })
    
})

function search() {
    $(document).ready(function() {
        $('#inputSearchAuto').keyup(function() {
            var txt = $(this).val();
            if(txt !== '') {
                $.ajax({
                    url: "live_search.php",
                    data: {search_key: txt},
                    dataType: "text",
                    method: "post",
                    success: function(data) {
                        $('#search_result').html(data);
                    }
                })
            }
            else {
                $('#search_result').html('Không tìm thấy sản phẩm nào');
            }
        })
    })       
}
function hide_nav_sidebar_dropdown() {
    $(document).ready(function() {
        $('#sidebar-dropdown').hide();

    })
   

}
function sidebar_hover() {
    $(document).ready(function() {
        $('#sidebar').on("mouseenter", function() {
            $('#sidebar-dropdown').show().on("mouseleave",  function() {
                $('#sidebar-dropdown').hide()
            });
        });
    })
   
}