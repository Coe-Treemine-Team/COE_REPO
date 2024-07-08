<!-- resources/views/detailed-order-result.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Replace with your CSS file path -->
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Order Details</h1>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Field</th>
                    <th class="px-4 py-2">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">PCB Dimensions:</td>
                    <td class="border px-4 py-2">{{ $validatedData['dimensions'] }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">PCB Base Material:</td>
                    <td class="border px-4 py-2">{{ $validatedData['base_material'] }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Layer Count:</td>
                    <td class="border px-4 py-2">{{ $validatedData['layer_count'] }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Finish Type:</td>
                    <td class="border px-4 py-2">{{ $validatedData['finish_type'] }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Solder Mask Color:</td>
                    <td class="border px-4 py-2">{{ $validatedData['solder_mask_color'] }}</td>
                </tr>
            </tbody>
        </table>

        <form action="{{ route('custom-orders.store') }}" method="POST">
            @csrf
            <input type="hidden" name="dimensions" value="{{ $validatedData['dimensions'] }}">
            <input type="hidden" name="base_material" value="{{ $validatedData['base_material'] }}">
            <input type="hidden" name="layer_count" value="{{ $validatedData['layer_count'] }}">
            <input type="hidden" name="finish_type" value="{{ $validatedData['finish_type'] }}">
            <input type="hidden" name="solder_mask_color" value="{{ $validatedData['solder_mask_color'] }}">
            <button type="submit" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Submit Order</button>
        </form>

        <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Back to Home</a>
    </div>
</body>
</html>
