<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detailedOrder(Request $request)
    {
        $validatedData = $request->validate([
            'dimensions' => 'required|string',
            'base_material' => 'required|string',
            'layer_count' => 'required|integer',
            'finish_type' => 'required|string',
            'solder_mask_color' => 'required|string',
            'resistors_include' => 'nullable|string',
            'resistors_quantity' => 'nullable|integer',
            // Add validation rules for other components as necessary
        ]);

        return view('detailed-order-result', compact('validatedData'));
    }
}
