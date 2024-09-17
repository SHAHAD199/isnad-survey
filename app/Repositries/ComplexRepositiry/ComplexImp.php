<?php 

namespace App\Repositries\ComplexRepositiry;

use App\Models\Complex;

class ComplexImp implements ComplexInterface

{
    public static function index($request)
    {
        $items = 
        ($request->name)  ? Complex::where('name', $request->name)->get() 
        : (($request->status) ? Complex::where('status', $request->status)->get()
        : Complex::get());
        
        return view('dashboard.complexes.index', compact('items'));
    }
    public static function create()
    {
        return view('dashboard.complexes.create');
    }
    public static function store($data)
    {
        Complex::create($data->all());
        return redirect(url('dashboard/complexes'));
    }
    public static function edit($item)
    {
        return view('dashboard.complexes.edit', compact('item'));
    }
    public static function update($item,$data)
    {
        $item->update($data->all());
        return redirect(url('dashboard/complexes'));
    }
    public static function destroy($item)
    {
        $item->delete();
        return back();
    }
}
 