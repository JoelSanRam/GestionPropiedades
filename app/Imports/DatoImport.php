<?php

namespace App\Imports;

use App\Dato;
use Maatwebsite\Excel\Concerns\ToModel;

class DatoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dato([
            //
        ]);
    }
}
