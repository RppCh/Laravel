<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class NewsController extends Controller{
     function add(){
        return view('admin.news.add');
    }
}