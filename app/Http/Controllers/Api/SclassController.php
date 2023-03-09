<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sclass;
use Illuminate\Http\Request;

class SclassController extends Controller
{
    public function index()
    {
        $data= Sclass::latest()->get();
        return response()->json($data);
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'
        ]);

        Sclass::insert([
            'class_name' => $request->class_name,
        ]);

        return response('Class name inserted successfuly!');
    }

    public function edit($id)
    {
        $data = Sclass::FindOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request,$id)
    {
        Sclass::FindOrFail($id)->update([
            'class_name' => $request->class_name,
        ]);

        return response('Class Name Updated successfuly!');
    }

    public function delete($id)
    {
        Sclass::FindOrFail($id)->delete();
        return response('Class Name Deleted Susccessfully!');
    }

}
