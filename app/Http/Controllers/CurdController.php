<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curd;
class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Curd::all();
        return(view('Curd.index')->with('data',$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return(view('Curd.addnew'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'name'=>'required|string|max:30',
          'email'=>'required|max:20|unique:curds',
          ]);
        Curd::create($request->all());
        return redirect()->route('curd.create')->with('success', 'User created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $data = Curd::where('id',$id)->first();
      
        return(view('Curd.edit')->with('data',$data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Curd::findOrFail($id);
        if($data->name==$request->name && $data->email==$request->email  )
          return redirect()->route('curd.index')->with('success', '');
          
        $data->update([
        'name'=> $request->name,
        'email'=> $request->email,
        ]);
        
        return redirect()->route('curd.index')->with('success', 'successfully Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Curd::where('id',$id)->first();
        if($user){
          $user->delete();
          return redirect()->route('curd.index')->with('success', 'successfully delete Data');
        }
        return redirect()->route('curd.index')->with('success', 'Id Not Found');
    }
}
