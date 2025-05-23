<?php

namespace App\Http\Controllers;

use App\Models\bankTransfer;
use Illuminate\Http\Request;

class BankTransferController extends Controller
{


    public function submit(Request $request){
       return $product = Product::where('id', $request->product_id)->first();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(bankTransfer $bankTransfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bankTransfer $bankTransfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bankTransfer $bankTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bankTransfer $bankTransfer)
    {
        //
    }
}
