<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require_once base_path().'/resources/org/code/Code.class.php';
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function set_page_info($title, $keywords, $description, $showNav, $css=array(), $js=array()){
       return array(
           'page_title'            => $title,
           'page_keywords'         => $keywords,
           'page_description'      => $description,
           'show_nav'              => $showNav,
           'page_css'              => $css,
           'page_js'               => $js
       );
    }
}
