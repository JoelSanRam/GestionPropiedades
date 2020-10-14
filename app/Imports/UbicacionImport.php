<?php

namespace App\Imports;

use App\Ubicacion;
use Maatwebsite\Excel\Concerns\ToModel;

class UbicacionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ubicacion([
            //
        ]);
    }
}
