<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\NewsletterSubscriber;
use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;
class NewsletterController extends Controller
{
    public function subscribers(){
        $subscribers = NewsletterSubscriber::get()->toArray();
        return view('FlowerShop.admin.subscribers.subscribers', compact('subscribers'));
    }
    public function export_subscribers(){
        return Excel::download(new SubscribersExport, 'subscribers.xlsx');
    }
}
