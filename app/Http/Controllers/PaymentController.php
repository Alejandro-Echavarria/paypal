<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $rules = [
            'value' => 'required|numeric|min:5',
            'currency' => 'required|string',
            'payment_method_id' => 'required|exists:payment_methods,id',
        ];

        $request->validate($rules);

        
    }

    public function approval()
    {
        
    }

    public function cancelled()
    {
        
    }
}
