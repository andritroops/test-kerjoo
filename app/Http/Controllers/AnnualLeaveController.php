<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnualLeave;
use App\Services\AnnualLeave\AnnualLeaveInterfaceService;

class AnnualLeaveController extends Controller
{
    protected $annualLeaveService;

    public function __construct(AnnualLeaveInterfaceService $annualLeaveService)
    {
        $this->annualLeaveService = $annualLeaveService;
    }

    public function index()
    {

        $result = $this->annualLeaveService->get();

        return response()->json($result, 200);
    }

    public function show($id)
    {

        $result = $this->annualLeaveService->show($id);

        return response()->json($result, 200);
    }

    public function store(StoreAnnualLeave $request)
    {
     
        $result = $this->annualLeaveService->store($request);
       
        return response()->json($result,200);
    }
}
