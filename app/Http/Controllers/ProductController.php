<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products = [
            [
                'id' => '1',
                'name' => 'iphone15pro'
            ],
            [
                'id' => '2',
                'name' => 'iphone16pro'
            ],
            ];
        return view('list-product')->with([
            'products' => $products
        ]);
    }
    public function getProduct($id){
        echo 'Them bien id';
    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
    public function thongtinsv(){
        $sinhvien = [
            [
                'ten' => 'Trinh minh duc',
                'que' => 'Phu xuyen , ha noi ',
                'masv' => 'Ph43883',
                'chuyennganh' => 'Lap trinh web'
            ]
            ];
            return view('thong-tin')->with([
                'sinhvien' => $sinhvien
            ]);
    }
}
