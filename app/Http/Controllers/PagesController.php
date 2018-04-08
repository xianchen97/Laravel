<?php
/**
 * Created by PhpStorm.
 * User: altdo
 * Date: 2018-04-07
 * Time: 3:03 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function contact(){
        return view('pages/contactus');
    }

    public function about(){
        return view('pages/aboutus');
    }
}