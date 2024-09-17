<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShowRoomRequest;
use App\Repositries\UserShowRoomRepo\UserShowRoomInterface;
use Illuminate\Http\Request;

class ShowRoomController extends Controller
{
    private $showroomUserInterface;
    public function __construct(UserShowRoomInterface $showroomUserInterface)
    {
        $this->showroomUserInterface = $showroomUserInterface;
    }

    public function index()
    {
        return $this->showroomUserInterface->index();
    }

    public function create()
    {
        return $this->showroomUserInterface->create();
    }

    public function store(StoreShowRoomRequest $request)
    {
        return $this->showroomUserInterface->store($request);
    }

    public function success()
    {
        return $this->showroomUserInterface->success();
    }
}
