<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Note;
use Illuminate\Http\Request;

class MerchantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return Merchant::with('note')->get();
        $merchants = Merchant::all();
        return view('merchants.index', compact('merchants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchant $merchants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchant $merchants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merchant $merchants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchant $merchants)
    {
        //
    }
}
