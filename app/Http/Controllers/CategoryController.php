<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //category
    public function index()
    {
        # code...
        // $data = Category::all(); // lay toan bo du lieu tu db
        $data = Category::paginate(1); //phan trang
        // dd($data);//printdata
        
        return view ('category.index',compact('data'));
    }

    //category/1
    public function view($id)
    {
        # code...
        return view ('category.view');
    }
}
