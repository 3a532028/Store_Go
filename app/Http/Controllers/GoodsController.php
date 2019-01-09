<?php

namespace App\Http\Controllers;

use App\On_sale;
use App\carousel_ad;
use Illuminate\Http\Request;
class GoodsController extends Controller
{
    public function index_sales()
    {
//        $on_sales = New On_sale();
        $on_sales=On_sale::all();
        $carousel_ads=carousel_ad::all();
        return  view("index",['title'=>'home','on_sales'=>$on_sales,'carousel_ads'=>$carousel_ads]) ;
//        return  view("index");
    }
    public function on_sales_ad_page($id)
    {

        $on_sale_ads = On_sale::where('id',$id)->get();

        return view('activity_ad_page',['title'=>'activity_'.$id,'on_sale_ads'=>$on_sale_ads]);

    }
    public function carousel_ad_page($id)
    {
        $carousel_ads=carousel_ad::where('id',$id)->get();
        return view('activity_ad_page',['title'=>'carousel_ads'.$id,'on_sale_ads'=>$carousel_ads]);

    }
}
