<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\products;

class frontendcontroller extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
   

    // bla bla tst
    public function view_products_front(Request $request) {
        $keyword = $request->keyword;
        $view = products::where('id','LIKE', '%'.$keyword.'%')
        -> orWhere('title', 'LIKE', '%'.$keyword.'%')
        -> orWhere('product_name', 'LIKE', '%'.$keyword.'%')
        -> orWhere('price', 'LIKE', '%'.$keyword.'%')
        -> orWhere('weight', 'LIKE', '%'.$keyword.'%')
        -> orWhere('description', 'LIKE', '%'.$keyword.'%')
        -> orWhere('images', 'LIKE', '%'.$keyword.'%')
        -> orWhere('id_category', 'LIKE', '%'.$keyword.'%')
        -> paginate(30);
        return view ('/products', ['products'=> $view]);
                    //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
    }
}
