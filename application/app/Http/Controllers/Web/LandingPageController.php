<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home() {
        $this->data['tab_title'] = "Serenade's Crib";
        $this->data['page_title'] = "Home";
        
        return view('web/landing/home', $this->data);
    }
}
