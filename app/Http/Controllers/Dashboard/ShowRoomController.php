<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ShowRoom;
use App\Repositries\ShowRoomRepo\ShowRoomInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowRoomController extends Controller
{

    private $showroomInterface;
    public function __construct(ShowRoomInterface $showRoomInterface)
    {
        $this->showroomInterface = $showRoomInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->showroomInterface->index($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowRoom $showRoom)
    {
        return $this->showroomInterface->show($showRoom);
    }

}
