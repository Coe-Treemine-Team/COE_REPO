<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use App\models\products;
use App\models\berita;
use App\models\keahlian;
use App\models\kota;
use App\models\pengalaman;
use App\models\alumni;
use App\models\contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class backendcontroller extends Controller
{
  
    public function view_user(Request $request) {
        $keyword = $request->keyword;
        $view = user::all();
        
        //where('id','LIKE', '%'.$keyword.'%')
        //-> orWhere('name', 'LIKE', '%'.$keyword.'%')
        //-> orWhere('email', 'LIKE', '%'.$keyword.'%')
        //-> orWhere('role_id', 'LIKE', '%'.$keyword.'%')
       //;
     
        return view ('/admin/view_user', ['nama'=> $view]);
                    //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
    }
    public function create_user()
    {
        return view ('/admin/view_form');
    }

    public function store_user(Request $request)
    {
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
    
            // Check if a photo is uploaded
            if ($request->file('photo')) {
                // Generate a new name for the file
                $newName = $request->name . '.' . $request->file('photo')->getClientOriginalExtension();
                // Store the uploaded file with the new name
                $request->file('photo')->move('storage/photos_user', $newName, 'public');
                // Save the filename to the user's photo field
                $user->photo = $newName;
    }

        $user -> save();
        //$view=user::create($request->all()); 
        // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
          return redirect('/admin/view_user')->with('success', 'Data Berhasil Tersimpan!');
          
    }

    public function edit_user(Request $request, $id)
    {
        
        $user = user::findOrFail($id); 
        return view ('/admin/view_edit', ['user' => $user]);
        // itu yang user itu nama panggilan dan di user-edit file itu panggil juga sama goblok
    }
    public function update_user (Request $request, $id)
    {
        $user = user::findOrFail($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        if ($request->has('delete_photo')) {
            // Delete the photo file from the storage folder
            Storage::delete('photos_user/' . $user->photo);
            // Clear the photo field in the database
            $user->photo = null;
        }
    
            // Check if a photo is uploaded
            if ($request->file('photo')) {
                // Generate a new name for the file
                $newName = $request->name . '.' . $request->file('photo')->getClientOriginalExtension();
                // Store the uploaded file with the new name
                $request->file('photo')->move('storage/photos_user', $newName, 'public');
                // Save the filename to the user's photo field
                $user->photo = $newName;
         }
        $user -> save();
        return redirect('/admin/view_user')->with('success', 'Data Berhasil Di Edit!');
    }

    public function delete_user($id)
    {
        $deleteduser = user::findOrFail($id);

        if ($deleteduser->photo) {
            // Delete the photo file from the storage
            Storage::delete('photos_user/' . $deleteduser->photo);
        }
        $deleteduser->delete();
        return redirect('/admin/view_user')->with('success', 'Data Telah Terhapus!');

    }

//---------products---------------------------
public function view_products(Request $request) {
    $keyword = $request->keyword;
    $view = products::all();
    
    //where('id','LIKE', '%'.$keyword.'%')
    //-> orWhere('name', 'LIKE', '%'.$keyword.'%')
    //-> orWhere('email', 'LIKE', '%'.$keyword.'%')
    //-> orWhere('role_id', 'LIKE', '%'.$keyword.'%')
   //;
 
    return view ('/products/view_products', ['products'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function create_products()
{
    return view ('/products/view_form');
}

public function store_products(Request $request)
{
    $products = new products;
    $products->id = $request->id;
    $products->title = $request->title;
    $products->product_name = $request->product_name;
    $products->price = $request->price;
    $products->weight = $request->weight;
    $products->description = $request->description;
    $products->id_category = $request->id_category;

        // Check if a photo is uploaded
        if ($request->file('images')) {
            // Generate a new name for the file
            $newName = $request->name . '.' . $request->file('images')->getClientOriginalExtension();
            // Store the uploaded file with the new name
            $request->file('images')->move('storage/photos_products', $newName, 'public');
            // Save the filename to the user's photo field
            $products->images = $newName;
}
    $products -> save();
    //$view=user::create($request->all()); 
    // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
      return redirect('/products/view_products')->with('success', 'Data Berhasil Tersimpan!');
      
}

public function edit_products(Request $request, $id)
{
    
    $user = products::findOrFail($id); 
    return view ('/products/view_edit', ['products' => $user]);
    // itu yang user itu nama panggilan dan di user-edit file itu panggil juga sama goblok
}
public function update_products (Request $request, $id)
{
    $products = products::findOrFail($id);
    $products->id = $request->id;
    $products->title = $request->title;
    $products->product_name = $request->product_name;
    $products->price = $request->price;
    $products->weight = $request->weight;
    $products->description = $request->description;
    $products->id_category = $request->id_category;

    if ($request->has('delete_photo')) {
        // Delete the photo file from the storage folder
        Storage::delete('photos_products' . $products->images);
        // Clear the photo field in the database
        $products->images = null;
    }

        // Check if a photo is uploaded
        if ($request->file('images')) {
            // Generate a new name for the file
            $newName = $request->title . '.' . $request->file('images')->getClientOriginalExtension();
            // Store the uploaded file with the new name
            $request->file('images')->move('storage/photos_products', $newName, 'public');
            // Save the filename to the user's photo field
            $products->images = $newName;
     }
    $products -> save();
    return redirect('/products/view_products')->with('success', 'Data Berhasil Di Edit!');
}

public function delete_products($id)
{
    $deleteduser = products::findOrFail($id);
    
    if ($deleteduser->photo) {
        // Delete the photo file from the storage
        Storage::delete('photos_products' . $deleteduser->photo);
    }
    $deleteduser->delete();
    return redirect('/products/view_products')->with('success', 'Data Telah Terhapus!');

}

 //----------------contact us--------------------
 public function view_contact(Request $request) {
    $keyword = $request->keyword;
    $view = contact::all();
 
    return view ('/contact_us/view_contact', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function store_contact(Request $request)
{
      $user=contact::create($request->all());
      return redirect('/contact')->with('success', 'Contact Us telah dikirim!');
      
}

public function delete_contact($id)
{
    $deleteduser = contact::findOrFail($id);
    $deleteduser->delete();
    return redirect('/contact_us/view_contact')->with('success', 'Data Telah Terhapus!');

}
}

