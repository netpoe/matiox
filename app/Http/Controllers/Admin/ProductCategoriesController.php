<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoriesController extends Controller
{
    public function store()
    {
        return;
    }

    public function index()
    {
        return view('admin.product-categories.index');
    }
}
