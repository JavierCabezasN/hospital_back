<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Speciality::all()
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $speciality =  new Speciality();
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $speciality->name = $request->name;
        $speciality->price = $request->price;
        $speciality->save();

        return response()->json([
            'data' => $speciality
        ]
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        return response()->json($speciality);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $speciality->name = $request->name;
        $speciality->price = $request->price;
        $speciality->save();

        return response()->json([
            'data' => $speciality
        ]
        );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        $status = false;
        try{
            $speciality->delete();
            $status = true;
            
        }catch(\Exception $e){}

        return response()->json(
            [
                'data'=>$speciality,
                'status' => $status
            ]
        );
    }
}
