<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Hello World';
        $name = 'Trang';
        $myphone = [
            'name' => 'iphone',
            'year' => 2022
        ];
        //return view('products.index', compact('myphone'));
        //return view('products.index')->with('title', $title);
        // return view('products.index', [
        //     'myphone' => $myphone,
        //     'name' => $name,
        //     'title' => $title
        // ]);
        print_r(route('products'));
        return view('products.index');
    }

    public function detail($productName, $id) {
        return "productName = " .$productName.
                ", id = ".$id;
    }
}
