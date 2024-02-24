<?php

namespace App\Http\Controllers;

use App\Models\ept_score;
use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;

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
        $data = url('/');
        $qrCode = new QrCode($data);
        $writer = new PngWriter();
        $pngResult = $writer->write($qrCode);
        $pngString = $pngResult->getString();
        $directoryPath = 'public/qrcode/';
        $filename = 'qrcode.png';
        Storage::put($directoryPath . $filename, $pngString);
    
        // Optionally, you can return a response or redirect to indicate success
        return redirect()->back();
    }
}
