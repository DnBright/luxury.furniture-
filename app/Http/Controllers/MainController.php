<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $collections = \App\Models\Collection::with('products')->get();
        return view('home', compact('collections'));
    }

    public function getCollectionDetails($slug)
    {
        $collection = \App\Models\Collection::with('products')->where('slug', $slug)->first();
        
        if (!$collection) {
            return response()->json(['success' => false, 'message' => 'Collection not found'], 404);
        }

        return response()->json([
            'success' => true,
            'collection' => $collection
        ]);
    }

    public function submitInquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        \App\Models\Inquiry::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message. Our design consultants will contact you shortly.'
        ]);
    }

    public function submitSubscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ], [
            'email.unique' => 'This email is already subscribed to our newsletter.',
        ]);

        \App\Models\Subscriber::create([
            'email' => $request->email
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Welcome to Luxury. You are now subscribed to our newsletter.'
        ]);
    }
}
