<?php

namespace App\Imports;

use App\Propiedad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PropiedadImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Propiedad([
            'origen_id' => $row['origen_id'],
            'tipo' => $row['tipo'],
            'granja' => $row['granja'],
            'estatus' => $row['estatus'],
            'nombre_corto' => $row['nombre_corto'],
            'ultimo_movimiento' => $row['ultimo_movimiento'],
            'observaciones' => $row['observaciones'],
            'propietario' => $row['propietario'],
            'entidad_federativa' => $row['entidad_federativa'],
            'municipio' => $row['municipio'],
            'localidad' => $row['localidad'],
            'folio_regpub' => $row['folio_regpub'],
            'folio_catastral' => $row['folio_catastral'],
        ]);
    }
}
