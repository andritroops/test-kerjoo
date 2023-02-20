<?php

namespace App\Services\AnnualLeave;

use App\Repositories\AnnualLeaveRepository;
use App\Services\AnnualLeave\AnnualLeaveInterfaceService;

class AnnualLeaveImplementService implements AnnualLeaveInterfaceService
{

    protected $annualLeaveRepository;

    public function __construct(AnnualLeaveRepository $annualLeaveRepository)
    {
        $this->annualLeaveRepository = $annualLeaveRepository;
    }

    public function get()
    {

        $result = $this->annualLeaveRepository->get();
        return $result;

    }

    
    public function show($id)
    {

        $result = $this->annualLeaveRepository->show($id);
        return $result;

    }

    public function store($data)
    {

        $result = $this->annualLeaveRepository->store($data);
        return $result;

    }

}