<?php 

namespace App\Repositries\UserShowRoomRepo;

use App\Models\{Complex, Region, ShowRoom, ShowroomNote};

class UserShowRoomImp implements UserShowRoomInterface
{
    public static function index()
    {
          return view('users.showroom.index');
    }
    public static function create()
    {
        $regions = Region::get();
        $complexes = Complex::get();
        return view('users.showroom.create', compact('regions','complexes'));
    }
    public static function store($request)
    {
        $item =  ShowRoom::create($request->except('note'));
        if(isset($request->note)) ShowroomNote::create([
            'show_room_id' => $item->id,
            'note' => $request->note
        ]);
        return redirect(url('success'));
    }

    public static function success()
    {
        return view('users.showroom.success');
    }
}