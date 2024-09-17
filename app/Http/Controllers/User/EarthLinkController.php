<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EarthLink\StoreEartLinkRequest;
use App\Repositries\UserEarthLinkRepo\EarthLinkInterface;
use Illuminate\Http\Request;

class EarthLinkController extends Controller
{
    private $earthlinkInterface;
    public function __construct(EarthLinkInterface $earthLinkInterface)
    {
        $this->earthlinkInterface = $earthLinkInterface;
    }

    public function index()
    {
        return $this->earthlinkInterface->index();
    }

    public function create()
    {
        return $this->earthlinkInterface->create();
    }

    public function store(StoreEartLinkRequest $request)
    {
        return $this->earthlinkInterface->store($request);
    }

    public function done()
    {
        return $this->earthlinkInterface->done();
    }
}
