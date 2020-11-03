<?php

namespace App\Imports;

use App\Marker;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MarkersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Marker([
            'propiedad_id' => $row['propiedad_id'],
            'lat' => $row['latitud'],
            'lng' => $row['longitud'],
        ]);
    }
}
