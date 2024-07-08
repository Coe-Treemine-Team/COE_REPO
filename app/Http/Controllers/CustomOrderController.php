<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomOrder;

class CustomOrderController extends Controller
{
    /**
     * Store a newly created custom order in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'dimensions' => 'required|string',
            'base_material' => 'required|string',
            'layer_count' => 'required|integer',
            'finish_type' => 'required|string',
            'solder_mask_color' => 'required|string',
        ]);

        // Create a new custom order record in the database
        CustomOrder::create($validatedData);

        // Redirect back to the home page with a success message
        return redirect()->route('home')->with('success', 'Order submitted successfully!');
    }
}
