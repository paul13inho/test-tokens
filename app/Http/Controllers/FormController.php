<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function processForm(Request $request)
    {
        $name = $request->input('nameInput');
        $code = $request->input('codeInput');

        // Replace '{{name-token}}' with the provided name
        $processedCode = str_replace('{{name-token}}', $name, $code);

        // Process $processedCode further as needed

        return view('welcome', ['processedCode' => $processedCode]);
    }

    public function processToken(Request $request)
    {
        $text = $request->input('textInput');
        $token = $request->input('tokenInput');
        $replacement = $request->input('replacementInput');

        $replacedText = replaceToken($text, $token, $replacement);

        return view('welcome', ['replacedText' => $replacedText]);
    }
}
