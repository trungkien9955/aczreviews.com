<?php 
use App\Models\FlowerShop\ProductFilter; 
$filters = ProductFilter::filters();
if(isset($product['section_id'])){
    $section_id = $product['section_id'];
    $section_url = $section_details['url'];
    // dd($section_url);
}
?>
@foreach($filters as $filter)
@if(isset($section_id))
<?php 
$filterAvailable = ProductFilter::available_filters( $section_url, $filter['id']);
?>
@if($filterAvailable == "Yes")
<div class="form-group">
    <label for="{{$filter['filter_column']}}">Select {{$filter['filter_name']}}</label>
    <select name="{{$filter['filter_column']}}" id="{{$filter['filter_column']}}" class = "form-control">
        <option value="Select">Select</option>
        @foreach($filter['filter_values'] as $value)
        <option @value="{{$value['filter_value']}}" if(!empty($filter['filter_column']) && $filter['filter_column'] == $value['filter_value']) selected>{{$value['filter_value']}}</option>
        @endforeach
    </select>
</div>
@endif
@endif
@endforeach