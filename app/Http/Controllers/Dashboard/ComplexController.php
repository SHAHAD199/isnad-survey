<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Complex;
use App\Repositries\ComplexRepositiry\ComplexInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Complexes\{StoreComplexRequest, UpdateComplexRequest};
use Illuminate\Http\Request;

class ComplexController extends Controller
{

    private $complexInterface;
    public function __construct(ComplexInterface $complexInterface)
    {
        $this->complexInterface = $complexInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->complexInterface->index($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->complexInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComplexRequest $request)
    {
        return $this->complexInterface->store($request);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complex $complex)
    {
        return $this->complexInterface->edit($complex);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComplexRequest $request, Complex $complex)
    {
        return $this->complexInterface->update($complex,$request);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complex $complex)
    {
        return $this->complexInterface->destroy($complex);
    }
}
