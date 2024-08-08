<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        return view('main-pages.index');
    }

    // Product

    public function bitrix24()
    {
        return view('product-pages.bitrix24');
    }

    public function respond()
    {
        return view('product-pages.bitrix24');
    }

    // ===============================

    // service
    public function service()
    {
        return view('main-pages.service');
    }

    // ===============================

    // Help Center

    public function faq()
    {
        return view('main-pages.faq');
    }

    public function about_us()
    {
        return view('main-pages.about');
    }

    public function contacts()
    {
        return view('helps.contact');
    }
    public function support()
    {
        return view('helps.support');
    }
    public function error404()
    {
        return view('main-pages.error404');
    }
    // ===============================
}
