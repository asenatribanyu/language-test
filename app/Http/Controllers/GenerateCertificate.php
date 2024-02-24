<?php

namespace App\Http\Controllers;

use App\Models\ept_score;
use Illuminate\Http\Request;

class GenerateCertificate extends Controller
{
    public function generate(Request $request)
    {
        if($request->category == 'ept'){
            $data = ept_score::where('user_id', auth()->user()->id)->where('score_code', $request->score_code)->first();
            $templatePath = public_path('storage/ept_certificate_template/ept_certificate_template.png');
            $fontPath = public_path('storage/ept_certificate_font/ept_certificate_font.ttf');
        }
        else{
            $data = ept_score::where('user_id', auth()->user()->id)->where('score_code', $request->score_code)->first();
            $templatePath = public_path('storage/toeic_certificate_template/toeic_certificate_template.png');
            $fontPath = public_path('storage/toeic_certificate_font/toeic_certificate_font.ttf');
        }
    }
}
