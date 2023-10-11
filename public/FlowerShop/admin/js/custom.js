
$(document).ready(function(){
    console.log('hello')
    //call datatables
    $('#sections').DataTable();
    $('#categories').DataTable();
    $('#brands').DataTable();
    $('#products').DataTable();
    $('#banners').DataTable();
    $('#filters').DataTable();
    $('#filters_values').DataTable();
    $('#attributes').DataTable();

    $('.nav-item').removeClass('active');
    $('.nav-link').removeClass('active');

    $('#current_password').keyup(function(){
        
        var current_password = $('#current_password').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check-admin-password',
            data: {current_password: current_password},
            success: function(response){
                if (response  ==  false) {
                    $('#check_password').html('Password is incorrect!')
                }
                else if (reponse = true) {
                    $('#check_password').html('Password is correct!')

                }

            },
            error:function(){
                alert('Error');
            }
        })
    })
    $(document).on('click', '.confirmDelete', function(){
        var module = $(this).attr('module');
        var moduleid = $(this).attr('moduleid');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              window.location = "/admin/delete-"+module+"/"+moduleid;
            }
          })
    })

    //append category level
    $('#section_id').change(function(){
        var section_id = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'get',
            url: '/admin/append-categories-level',
            data: {section_id: section_id},
            success: function(resp){
                $('#appendCategoriesLevel').html(resp);
            }, erorr: function(){
                alert('Error');
            }
        })
    })
    //add or remove fields jquery
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="size[]" placeholder="Size" style = "max-width: 240px;"/><input type="text" name="sku[]" placeholder="SKU" required = "" style = "max-width: 240px;"/><input type="text" name="color[]" placeholder="Color" style = "max-width: 240px;"/><input type="text" name="price[]" placeholder="Price" required = "" style = "max-width: 240px;"/><input type="text" name="stock[]" placeholder="Stock" required = "" style = "max-width: 240px;"/><br><label for="">Thêm hình ảnh</label><input type="file" name="image[]" placeholder="Image" style = "max-width: 240px;"/><br><a href="javascript:void(0);" class="remove_button" title="">Xóa</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
    //show filters when category is selected
    $("#category_id").on("change", function(){
        var category_id = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: '/admin/category-filters',
            data: {category_id:category_id},
            success: function(resp){
                $(".loadFilters").html(resp.view);
            }
        })
    })
    //update admin status
    $(document).on("click", ".updateAdminStatus", function() {
        var status = $(this).children("i").attr("status");
        var admin_id = $(this).attr("admin_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-admin-status',
            data: {status:status, admin_id:admin_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#admin-"+admin_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#admin-"+admin_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    //update section status
    $(document).on("click", ".updateSectionStatus", function() {
        var status = $(this).children("i").attr("status");
        var section_id = $(this).attr("section_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-section-status',
            data: {status:status, section_id:section_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#section-"+section_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#section-"+section_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    //update image status
    $(document).on("click", ".updateImageStatus", function() {
        var status = $(this).children("i").attr("status");
        var image_id = $(this).attr("image_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-image-status',
            data: {status:status, image_id:image_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#image-"+image_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#image-"+image_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    //update attribute status
    $(document).on("click", ".updateAttributeStatus", function() {
        var status = $(this).children("i").attr("status");
        var attribute_id = $(this).attr("attribute_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-attribute-status',
            data: {status:status, attribute_id:attribute_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#attribute-"+attribute_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#attribute-"+attribute_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    //update banner status
    $(document).on("click", ".updateBannerStatus", function() {
        var status = $(this).children("i").attr("status");
        var banner_id = $(this).attr("banner_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-banner-status',
            data: {status:status, banner_id:banner_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#banner-"+banner_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#banner-"+banner_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    $(document).on("click", ".updateFilterStatus", function() {
        var status = $(this).children("i").attr("status");
        var filter_id = $(this).attr("filter_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-filter-status',
            data: {status:status, filter_id:filter_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#filter-"+filter_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#filter-"+filter_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    //update filter values status
    $(document).on("click", ".updateFilterValueStatus", function() {
        var status = $(this).children("i").attr("status");
        var filter_id = $(this).attr("filter_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-filter-value-status',
            data: {status:status, filter_id:filter_id},
            success:function(resp){
                if(resp["status"]==0){
                    $("#filter-"+filter_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-outline' status = 'Inactive'></i>");
                }
                else if(resp["status"]==1){
                    $("#filter-"+filter_id).html("<i style = 'font-size:25px'class = 'mdi mdi-bookmark-check' status = 'Active'></i>");
                }
            },
            error:function(){
                alert("Error");
            }
        })
    })
    $(document).on('click', '#automatic_coupon', function(){
        $('#coupon_field').hide();
    })
    $(document).on('click', '#manual_coupon', function(){
        $('#coupon_field').show();
    })
})