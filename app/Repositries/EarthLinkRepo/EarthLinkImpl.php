<?php 

namespace App\Repositries\EarthLinkRepo;

use App\Models\Complex;
use App\Models\EarthLink;

class EarthLinkImpl implements EarthLinkInterface
{
  public static function index($request)
  {
    $query = 
      ($request->fname) ? EarthLink::where('fname', 'like' , '%' . $request->fname . '%')
    : (($request->phone) ? EarthLink::where('phone', 'like' , '%' . $request->phone . '%')
    : (($request->region) ? EarthLink::where('region', 'like' , '%' . $request->region . '%')
    : (($request->city) ? EarthLink::where('city', 'like' , '%' . $request->city . '%')
    : (($request->family_number) ? EarthLink::where('family_number',  $request->family_number)
    : (($request->profession) ? EarthLink::where('profession', 'like' , '%' . $request->profession . '%')
    : (($request->complex_id) ? EarthLink::where('complex_id', $request->complex_id)
    : (($request->academic_achievement) ? EarthLink::where('academic_achievement',  $request->academic_achievement)
    : (($request->marital_status) ? EarthLink::where('marital_status',  $request->marital_status)
    : (($request->best_payment) ? EarthLink::where('best_payment',  $request->best_payment)
    : (($request->estate_type) ? EarthLink::where('estate_type',  $request->estate_type)
    : (($request->area) ? EarthLink::where('area',  $request->area)
    : (($request->location) ? EarthLink::where('location',  $request->location)
    : (($request->purchase_purpose) ? EarthLink::where('purchase_purpose',  $request->purchase_purpose)
    : (($request->payment_budget) ? EarthLink::where('payment_budget',  $request->payment_budget)
    : (($request->budget) ? EarthLink::where('budget',  $request->budget)
    : EarthLink::query()

   )))))))))))))));
 
   $items = $query->get();
   $complexes = Complex::get();
   $regoins = ['بغداد', 'الكوت'];
   return view('dashboard.earthlink.index', compact('items','complexes', 'regoins'));
  }

  public static function show($item)
  {
     return view('dashboard.earthlink.show', compact('item'));
  }

  
}