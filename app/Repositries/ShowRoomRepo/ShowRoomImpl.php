<?php 

namespace App\Repositries\ShowRoomRepo;

use App\Models\Complex;
use App\Models\Region;
use App\Models\ShowRoom;

class ShowRoomImpl implements ShowRoomInterface
{
    public static function index($request)
    {
        $query = 
                ($request->fname) ? ShowRoom::where('fname', 'like' , '%' . $request->fname . '%')
                : (($request->phone) ? ShowRoom::where('phone', 'like' , '%' . $request->phone . '%')
                : (($request->region) ? ShowRoom::where('region', 'like' , '%' . $request->region . '%')
                : (($request->visit_date) ? ShowRoom::where('visit_date',  $request->visit_date)
                : (($request->visit_number) ? ShowRoom::where('visit_number',  $request->visit_number)
                : (($request->payment_method) ? ShowRoom::where('payment_method',  $request->payment_method)
                : (($request->recognition_method) ? ShowRoom::where('recognition_method',  $request->recognition_method)
                : (($request->family_number) ? ShowRoom::where('family_number',  $request->family_number)
                : (($request->profession) ? ShowRoom::where('profession', 'like' , '%' . $request->profession . '%')
                : (($request->complex_id) ? ShowRoom::where('complex_id', $request->complex_id)
                : ShowRoom::query()
        )))))))));

        $items = $query->get();
        $regoins = Region::get();
        $complexes = Complex::get();
        return view('dashboard.showroom.index', compact('items','regoins', 'complexes'));
    }
    public static function show($item)
    {
        return view('dashboard.showroom.show', compact('item'));
    }
   
}