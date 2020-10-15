<?php

namespace App\Imports;

use App\Dimencion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DimencionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dimencion([
            'propiedad_id' => $row['propiedad_id'],
            'superficie_construccion' => $row['superficie_construccion'],
            'superficie_terreno' => $row['superficie_terreno'],
            'frente' => $row['frente'],
            'fondo' => $row['fondo'],
            'capacidad_granja' => $row['capacidad_granja'],
        ]);
    }
}
