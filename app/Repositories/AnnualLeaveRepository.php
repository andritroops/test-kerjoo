<?php

namespace App\Repositories;

use App\AnnualLeave;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnnualLeaveRepository
{

    private $annualLeave;

    public function __construct(AnnualLeave $annualLeave)
    {
        $this->annualLeave = $annualLeave;
    }

    public function get()
    {
        $annualLeave = $this->annualLeave->with('user')->orderBy('created_at', 'DESC')->get();

        return $annualLeave;
    }

     public function show($id)
    {
        $annualLeave = $this->annualLeave->with('user')->where('id',$id)->first();

        return $annualLeave;
    }


    public function store($request)
    {

        try {

            $result = $this->annualLeave->create([
                'date' => $request->date,
                'user_id' => $request->user_id
            ]);

            return $result;

        } catch (\Throwable $th) {
          
            throw $th;
        }
    }
}
