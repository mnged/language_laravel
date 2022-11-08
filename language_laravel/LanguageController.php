<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function Arabic(){
        session()->get('language');
        session()->forget('language');
        Session::put('language','arabic');
        return redirect()->back();
    }

  public function English(){
        session()->get('language');
        session()->forget('language');
        Session::put('language','english');
        return redirect()->back();
    }


/////////////Frontend language Start Web.php
// Route::get('/language/arabic', [App\Http\Controllers\Frontend\LanguageController::class, 'Arabic'])->name('arabic.language');
// Route::get('/language/english', [App\Http\Controllers\Frontend\LanguageController::class, 'English'])->name('english.language');

/////////////Frontend language End
    // <!-- css Head -->

    // @if (session()->get('language') == 'arabic')
    //     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    //     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    //     <style>
    //         body {
    //             direction: rtl;
    //             font-family: 'Tajawal', sans-serif;
    //         }

    //         .navbar-expand-md .navbar-nav .nav-link {
    //             padding-left: .5rem;
    //             padding-right: 2.5rem;
    //         }
    //     </style>
    // @else
    //     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    //     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    // @endif


     // <!-- Html -->
        // @if (session()->get('language') == 'arabic')
        //     {{ $product->product_name_ar }}
        // @else
        //     {{ $product->product_name_en }}
        // @endif
}
