
        <?php
                if (isset($_GET['collection'])) {
                    $key = $_GET['collection'];
                }
        ?>
    
    <div class="container">
        <div class="filter-wrapper">
                 <?php
                if (isset($_GET['collection'])) {
                    $key = $_GET['collection'];
      
                }
                ?>
                <div class="filter_item">
                    <div class="filter_item_header fw-bold">
                    <span>Thương hiệu</span>
                    </div>
                    <div class="filter_item_body">
                        <select name="price" id="brand_options">
                        <?php
                        $sql = "SELECT DISTINCT product_brand FROM $key ORDER BY product_code DESC";
                        $statement = $connect->prepare($sql);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row) {
                            ?>
                            <div>
                                <label>
                                    <input type="checkbox" value = "<?php echo $row['product_brand']; ?>">
                                    <?php echo $row['product_brand']; ?>
                                </label>
                            </div>
                            <?php
                        }
                         ?>
                        
                            <option value="Dell">Dell</option>
                            <option value="Razer">Razer</option>
                            <option value="HP">HP</option>
                            <option value="Asus">Asus</option>
                        </select>
                    </div>
                </div>
                <div class="filter_item">
                    <div class="filter_item_header fw-bold">
                    <span>CPU</span>
                    </div>
                    <div class="filter_item_body">
                        <select name="price" id="brand_options">
                            <option value="core_i5_9400">Core i5 9400</option>
                            <option value="core_i5_9400f">Core i5 9400f</option>
                            <option value="core_i7_9400">Core i7 9400</option>
                            <option value="core_i7_9400f">Core i7 9400f</option>
                        </select>
                    </div>
                </div>

                <div class="filter_item">
                    <div class="filter_item_header fw-bold">
                    <span>RAM</span>
                    </div>
                    <div class="filter_item_body">
                        <select name="price" id="brand_options">
                            <option value="4gb">4gb</option>
                            <option value="8gb">8gb</option>
                            <option value="16gb">16gb</option>
                            <option value="32gb">32gb</option>
                        </select>
                    </div>
                </div>
                <div class="filter_item">
                    <div class="filter_item_header fw-bold">
                    <span>Màn hình</span>
                    </div>
                    <div class="filter_item_body fw-bold">
                        <select name="price" id="brand_options">
                            <option value="14inch">14 inch</option>
                            <option value="15.6inch">15.6 inch</option>
                            <option value="17inch">17 inch</option>
                            <option value="19inch">19 inch</option>
                        </select>
                    </div>
                </div>
        </div>
    </div>
    <script>
        var filter = {
            product_brand: "Dell",
        }
        filter.product_title = "Laptop Dell";
        var output = "";

        $('#pc-checkbox').on('change', function() {
            if ($(this).is(':checked')) {
                $.ajax({
                    type: "post",
                    url: "filter.php",
                    data: {key: $(this).val()},
                    dataType: "text",
                    success: function(data) {
                        output = data;
                        $('#result').html(output);
                    }
                })
            }
            else { 
                $('#result').html("");
            }
        })
        $('#pc-office-checkbox').on('change', function() {
            if ($(this).is(':checked')) {
                $.ajax({
                    type: "post",
                    url: "filter.php",
                    data: {key_pc: $(this).val()},
                    dataType: "text",
                    success: function(data) {
                        
                        $('#result').html(data);
                    }
                })
            }
            else { 
                $('#result').html("");
            }
        })

        $('.purpose').each(function() {
        $(this).on('change', function() {
            if ($(this).is(':checked')) {
                if(!filter.hasOwnProperty('purpose')) {
                    filter.purpose= [];
                    if (!filter.purpose.includes($(this).val())) {
                        filter.purpose.push($(this).val());
                    }
                }
                else {
                    if (!filter.purpose.includes($(this).val())) {
                        filter.purpose.push($(this).val());

                    }


                }

            }
            else {
                if (filter.purpose.includes($(this).val())) {
                    for (var i in filter.purpose) {
                        if(filter.purpose[i] == $(this).val()) {
                            filter.purpose.splice(i, 1);
                        }
                    }
                    }
            }
            console.log(filter)

            })
        });

       $('.size').each(function() {
        $(this).on('change', function() {
            if ($(this).is(':checked')) {
                if(!filter.hasOwnProperty('size')) {
                    filter.size= [];
                    if (!filter.size.includes($(this).val())) {
                        filter.size.push($(this).val());
                    }
                }
                else {
                    if (!filter.size.includes($(this).val())) {
                        filter.size.push($(this).val());

                    }


                }

            }
            else {
                if (filter.size.includes($(this).val())) {
                    for (var i in filter.size) {
                        if(filter.size[i] == $(this).val()) {
                            filter.size.splice(i, 1);
                        }
                    }
                    }
            }
            console.log(filter)

            })
        });

        $('#sort_section').on('change', function() {
            $('#sort_section option').each(function() {
                if($(this).is(':selected')) {
                    filter.sort = $(this).val();
                }
            })
            console.log(filter)
        })

    </script>
