<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TablesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'propiedades' => new PropiedadImport(),
            'datos_propiedades' => new DatoImport(),
            'ubicaciones' => new UbicacionImport(),
            'valores' => new ValorImport(),
            'dimenciones' => new DimencionImport(),
        ];
    }
}
