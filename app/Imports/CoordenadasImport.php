<?php

namespace App\Imports;

use App\Coordenada;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoordenadasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Coordenada([
            'propiedad_id' => $row['propiedad_id'],
            'lat' => $row['latitud'],
            'lng' => $row['longitud'],
            'marcador' => $row['marcador'],
        ]);
    }
}
