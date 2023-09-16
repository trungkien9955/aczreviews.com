$(document).ready(function(){
    $('#size_selection').on('change', function(){
       var product_id = $('#product_id').val();
        var size = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "/product/size-selection",
            data: {product_id: product_id, size:size},
            success: function(resp){
                alert(resp);
            },
            error: function(){
                alert('error');
            }
        })
    })
})