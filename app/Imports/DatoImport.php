<?php

namespace App\Imports;

use App\Dato;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dato([
            'propiedad_id' => $row['propiedad_id'],
            'entidad_federativa' => $row['entidad_federativa'],
            'municipio' => $row['municipio'],
            'localidad' => $row['localidad'],
            'folio_regpub' => $row['folio_regpub'],
            'folio_catastral' => $row['folio_catastral'],
        ]);
    }
}
