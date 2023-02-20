<?php

namespace App\Services\AnnualLeave;

interface AnnualLeaveInterfaceService
{
    public function get();
    public function show($id);
    public function store($data);
}