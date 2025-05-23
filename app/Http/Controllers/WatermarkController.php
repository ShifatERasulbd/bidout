<?php

namespace App\Http\Controllers;

use App\Models\Watermark;
use Illuminate\Http\Request;

class WatermarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "kiser chobi";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('backend.watermark.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'image' => 'required|image|max:2048' // max 2MB
        ]);
           $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
          // Save to public/uploads
             $file->move(public_path('uploads/watermark'), $filename);
            // get file path
               $file_path='uploads/watermark/'.$filename;

              $Watermark=Watermark::insert([
            'waterMark_image' => $file_path,
           
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Watermark $watermark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Watermark $watermark,$id)
    {
        //
         $watermark=Watermark::findorfail($id);
         return view('backend.watermark.edit',compact('watermark'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Watermark $watermark)
    {
        //
                 $id= $request->id;
                 $watermark=Watermark::findorfail($id);
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/watermark/'), $filename);
                $file_path='uploads/watermark/'.$filename;
                  $watermark->update([
                    'waterMark_image' =>  $file_path,
                  ]);
                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watermark $watermark)
    {
        //
    }
}
