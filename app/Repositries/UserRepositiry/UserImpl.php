<?php 

namespace App\Repositries\UserRepositiry;

use App\Models\User;

class UserImpl implements UserInterface
{
    public static function index($request)
    {
        $items = ($request->name) ? User::where('name', $request->name)->get() : User::get();
        return view('dashboard.users.index', compact('items'));
    }
    public static function create()
    {
        return view('dashboard.users.create');
    }
    public static function store($data)
    {
        User::create($data->all());
        return redirect(url('dashboard/users'));
    }
    public static function edit($item)
    {
        return view('dashboard.users.edit', compact('item'));
    }
    public static function update($item,$data)
    {
        $item->update($data->all());
        return back();
    }
    public static function destroy($item)
    {
        $item->delete();
        return back();
    }
}