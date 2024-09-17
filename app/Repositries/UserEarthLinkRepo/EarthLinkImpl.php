<?php 

namespace App\Repositries\UserEarthLinkRepo;

use App\Models\{Complex,EarthLink, Region};

class EarthLinkImpl implements EarthLinkInterface
{
    public static function index()
    {
          return view('users.earthlink.index');
    }

    public static function create()
    {
        $regions = Region::get();
        $complexes = Complex::get();
        return view('users.earthlink.create', compact('regions','complexes'));
    }

    public static function store($request)
    {
        $created_data = array_merge($request->all(), [
            'location' => implode(',', $request->location)
        ]);
        EarthLink::create($created_data);
        return redirect('earthlink/done');
        return back();
    }

    public static function done()
    {
        return view('users.earthlink.done');
    }

}