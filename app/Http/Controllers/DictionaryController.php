<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function translate(Request $request)
    {
        $word = $request->wordinput;
        switch ($word) {
            case 'hello':
                echo 'xin chao';
                break;

            case 'good bye':
                echo 'tam biet';
                break;
            default:
                echo "khong co trong tu dien";
                break;
        }
    }
}
