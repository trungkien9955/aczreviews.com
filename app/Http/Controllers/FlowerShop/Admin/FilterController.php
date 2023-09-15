<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\FlowerShop\ProductFilter;
use App\Models\FlowerShop\Section;
use DB;
use Schema;
class FilterController extends Controller
{
    public function filters(){
        Session::put('page', 'filters');
        $filters = ProductFilter::get()->toArray();
        // dd($filters);
        return view('FlowerShop.admin.filters.filters')->with(compact('filters'));
    }
    public function add_edit_filters(Request $request, $id = null){
        Session::put('page', 'filters');
        if($id==""){
            $title = "Add filter";
            $filter  = new ProductFilter;
            $message = "Filter added successfully!";
        }else{
            $title = "Edit filter";
            $filter  = ProductFilter::find($id);
            $message = "Filter updated successfully!";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data);
            $section_ids = implode(',', $data['section_ids']);
            $filter->section_ids = $section_ids;
            $filter->filter_name = $data['filter_name'];
            $filter->filter_column = $data['filter_column'];
            $filter->status = 1;
            $filter->save();
            //add filter to products table
            if (!Schema::hasColumn('products', $data['filter_column'])) {
                DB::statement('Alter table products add '.$data['filter_column'].' varchar(255) after description');
            }
            return redirect('admin/filters')->with('success_message', $message);
        }
        $sections = Section::get()->toArray();
        return view('FlowerShop.admin.filters.add_edit_filters')->with(compact('title', 'filter', 'message', 'sections'));
    }
}
