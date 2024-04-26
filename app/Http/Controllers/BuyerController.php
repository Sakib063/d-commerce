<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buyer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buyer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data=$request->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'phone'=>['required','string'],
            'home_address'=>['required','string'],
            'password'=>['required','string'],
        ]);

        $buyer=Buyer::create($data);

        return to_route('buyer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
