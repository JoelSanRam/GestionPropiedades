<?php

namespace App\Imports;

use App\Dimencion;
use Maatwebsite\Excel\Concerns\ToModel;

class DimencionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dimencion([
            //
        ]);
    }
}
