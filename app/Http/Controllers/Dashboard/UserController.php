<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Requests\Users\{StoreUserRequest, UpdateUserRequest};
use App\Repositries\UserRepositiry\UserInterface;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller 
{
    private $userInterface;
    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }
    
    
    //  public static function middleware(): array
    // {
    //     return [
    //         new Middleware(middleware: 'auth:api', except: ['store'])
    //     ];
    // }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->userInterface->index($request);
    }

    public function create()
    {
        return $this->userInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return $this->userInterface->store($request);
    }


    public function edit(User $user)
    {
        return $this->userInterface->edit($user);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return $this->userInterface->update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return $this->userInterface->destroy($user);
    }
}
