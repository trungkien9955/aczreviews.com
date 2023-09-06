<?php
use App\Models\FlowerShop\ProductFilter;
$filters = ProductFilter::filters();
?>
<script>
    $(document).ready(function(){
        function get_filter(class_name){
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            })
            return filter;
        }
        $('#sorter').on('change', function(){
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sort = $('#sorter').val();
            var url = $('#url').val();
            @foreach($filters as $filter){
                var {{$filter['filter_column']}} = get_filter('{{$filter['filter_column']}}');
            }
            @endforeach
            console.log(brand, size, color, sort, url, @foreach($filters as $filter){
                return {{$filter['filter_column']}} @endforeach;
            });
        })
    })
</script>