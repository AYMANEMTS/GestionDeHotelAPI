<?php

namespace App\Http\Controllers;

use App\Models\Appartment;
use Illuminate\Http\Request;
use Validator;

class AppartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Appartment $appartment)
    {
        return $appartment::paginate(9);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                    'errors' => $validator->errors(),
                    'message' => 'Please corect the errors'

            ]);
        }
        $apprt = Appartment::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Appartment created successfuly'
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Appartment $appartment)
    {
        return $appartment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $validator = Validator::make($data,
        [
            'title' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                    'errors' => $validator->errors(),
                    'message' => 'Please corect the errors'

            ]);
        }
        $appartment = Appartment::find($id);
        if(!$appartment){
            return response()->json(['error' => 'Appartment not found']);
        }
        $appartment->title = $data['title'];
        $appartment->detail = $data['detail'];
        $appartment->save();
        return response()->json([
            'success' => true,
            'message' => 'Appartment updated successfully'
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appartment $appartment)
    {
        $appartment->delete();
        return response()->json([
            'message' => 'appartment est suprime',
            'id' => $appartment->id,
            'success' => true
        ]);
    }
}
