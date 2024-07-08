<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart - COE TreeMine</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 h-screen bg-blue-50">
@include('components.navbar')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Your Cart</h1>
    <div class="bg-white rounded-lg shadow-lg p-6">
        @if(Session::has('cart') && count(Session::get('cart')) > 0)
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border-b p-2 text-left">Product</th>
                        <th class="border-b p-2 text-left">Quantity</th>
                        <th class="border-b p-2 text-right">Price</th>
                        <th class="border-b p-2 text-right">Total</th>
                        <th class="border-b p-2 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(Session::get('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <tr>
                            <td class="border-b p-2">{{ $details['product_name'] }}</td>
                            <td class="border-b p-2">
                                <form action="{{ route('cart.update', $id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="w-16 text-center">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-2 rounded-md">Update</button>
                                </form>
                            </td>
                            <td class="border-b p-2 text-right">Rp.{{ $details['price'] }}</td>
                            <td class="border-b p-2 text-right">Rp.{{ $details['price'] * $details['quantity'] }}</td>
                            <td class="border-b p-2 text-right">
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-2 rounded-md">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="p-2 text-right font-bold">Total</td>
                        <td colspan="2" class="p-2 text-right font-bold">Rp.{{ $total }}</td>
                    </tr>
                </tbody>
            </table>

            <form action="{{ route('cart.checkout') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="address" class="block text-gray-700">Address:</label>
                    <textarea id="address" name="address" class="mt-1 block w-full resize-none" style="width: 100%; height: 100px;" required>{{ Auth::user()->address }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="payment" class="block text-gray-700">Upload Payment Proof:</label>
                    <input type="file" id="payment" name="payment" class="mt-1 block w-full" accept="image/*" required>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">Checkout</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</div>
@include('components.footer')
</body>
</html>
