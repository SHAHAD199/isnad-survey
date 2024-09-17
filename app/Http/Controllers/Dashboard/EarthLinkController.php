<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositries\EarthLinkRepo\EarthLinkInterface;
use Illuminate\Http\Request;
use App\Models\EarthLink;


class EarthLinkController extends Controller
{
    private $earthlinkInterface;
    public function __construct(EarthLinkInterface $earthLinkInterface)
    {
        $this->earthlinkInterface = $earthLinkInterface;
    }


    public function index(Request $request)
    {
       return $this->earthlinkInterface->index($request);
    }

    public function show(EarthLink $earthLink)
    {
        return $this->earthlinkInterface->show($earthLink);
    }
}
