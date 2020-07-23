<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Type\CreateTypeRequest;
use App\Http\Requests\Type\UpdateTypeRequest;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('types.index')->with('types',Type::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTypeRequest $request)
    {
        Type::create([
            'name'=>$request->name
         ]);
        
         session()->flash('success','Type created successfully!!');
         return redirect(route('types.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('types.create')->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->update([
            'name'=>$request->name
        ]);

     
        session()->flash('success','Type updated successfully!');
        return redirect(route('types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        if($type->doctor->count()>0)
        {
        
          session()->flash('error','Type Can not be deleted because it has some doctor');
          return redirect()->back();
        }
 
         $type->delete();
         session()->flash('success','Type deleted successfully!');
         return redirect(route('types.index'));
    }
}
