<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\SubmitProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function ShowSubmitProperty()
    {
        return view('submitproperty');
    }

    public function SubmitProperty(Request $request)
    {
        try {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'scontent' => 'required',
            'ptype' => 'required',
            'stype' => 'required',
            'asize' => 'required',
            'price' => 'required',
            'loc' => 'required',
            'city' => 'required',
            'state' => 'required',
            'aimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aimage1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aimage2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aimage3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'isFeatured' => 'required',
            'rsize' => 'required',
        ]);
        

        // Get the user ID from the session
        $userId = Auth::id();

        // Store the images
        $image1 = $request->file('aimage1')->store('admin/property');
        $image2 = $request->file('aimage2')->store('admin/property');
        $image3 = $request->file('aimage3')->store('admin/property');
        $image = $request->file('aimage')->store('admin/property');

        // Create a new SubmitProperty model instance and set the attributes
        $property = new SubmitProperty();
        $property->title = $validatedData['title'];
        $property->scontent = $validatedData['scontent'];
        $property->pcontent = $validatedData['pcontent'];
        $property->type = $validatedData['ptype'];
        $property->stype = $validatedData['stype'];
        $property->price = $validatedData['price'];
        $property->city = $validatedData['city'];
        $property->state = $validatedData['state'];
        $property->rsize = $validatedData['rsize'];
        $property->size = $validatedData['asize'];
        $property->location = $validatedData['loc'];
        $property->pimage1 = $image1;
        $property->pimage2 = $image2;
        $property->pimage3 = $image3;
        $property->pimage = $image;
        $property->uid = $userId;
        $property->status = $validatedData['status'];
        $property->isFeatured = $validatedData['isFeatured'];

        $property->save();

        Session::flash('success', 'Property submitted successfully.');
        
        return redirect()->back();
    }catch (\Exception $e) {
         // Redirect back with error message
         return redirect()->back()->with('error', 'An error occurred while submitting the property.');
    }
    }
       
}
