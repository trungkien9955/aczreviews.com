<?php
use App\Models\FlowerShop\ProductFilter;
$filters = ProductFilter::filters();
// dd($filters);
?>
<div class="col-lg-3">
    <div class="filter-wrapper">
        <span style = "font-weight:bold; font-size = 18px;" >Bộ lọc</span>
        <?php
        $prices = array('0-100000', '100000-200000', '200000-500000', '500000-1000000')
        ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Giá</span>
            <form action="" method = "post">
                @foreach($prices as $key => $price)
                <div class="form-check">
                    <input class="form-check-input price" type="checkbox" value="{{$price}}" id="price{{$key}}">
                    <label class="form-check-label" for="price{{$key}}">
                    {{$price}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        <?php
        $brands = ProductFilter::brands($section['url']);
        ?>
        @if(count($brands)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Nhãn hiệu</span>
            <form action="" method = "post">
                @foreach($brands as $key => $brand)
                <div class="form-check">
                    <input class="form-check-input brand" type="checkbox" value="{{$brand['id']}}" id="brand{{$key}}">
                    <label class="form-check-label" for="brand{{$key}}">
                    {{$brand['name']}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
        <?php
        $sizes = ProductFilter::sizes($section['url']);
        ?>
        @if(count($sizes)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Size</span>
            <form action="" method = "post">
                @foreach($sizes as $key => $size)
                <div class="form-check">
                    <input class="form-check-input size" type="checkbox" value="{{$size}}" id="size{{$key}}">
                    <label class="form-check-label" for="size{{$key}}">
                    {{$size}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
        <?php
        $colors = ProductFilter::colors($section['url']);
        ?>
        @if(count($colors)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Màu sắc</span>
            <form action="" method = "post">
                @foreach($colors as $key => $color)
                <div class="form-check">
                    <input class="form-check-input color" type="checkbox" value="{{$color}}" id="color{{$key}}">
                    <label class="form-check-label" for="color{{$key}}">
                    {{$color}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
        <!-- <div class="filter-item">
            @foreach($filters as $filter)
            <?php
                $is_available = ProductFilter::available_filters($section['url'], $filter['id']);
            ?>
            @if($is_available == "Yes")
            <span style = "font-weight:bold;">{{$filter['filter_name']}}</span>
            <form action="" method = "post">
                @foreach($filter['filter_values'] as $key => $filter_value)
                <div class="form-check">
                    <input class="form-check-input {{$filter['filter_column']}}" type="checkbox" value="{{$filter_value['filter_value']}}" id="{{$filter['filter_column']}}{{$key}}">
                    <label class="form-check-label" for="{{$filter['filter_column']}}{{$key}}">
                    {{$filter_value['filter_value']}}
                    </label>
                </div>
                @endforeach
            </form>
            @endif
            @endforeach
        </div> -->
    </div>
</div>