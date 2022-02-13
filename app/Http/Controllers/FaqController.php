<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqController
{
    public function show() {

        $faqs = Faq::all();

        return view('faq', [
            'faqs' => $faqs
        ]);
    }
}
