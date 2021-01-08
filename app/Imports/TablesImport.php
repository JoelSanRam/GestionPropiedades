<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TablesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'db_propiedades' => new PropiedadImport(),
            'db_ubicaciones' => new UbicacionImport(),
            'db_dimenciones' => new DimencionImport(),
            'db_valores' => new ValorImport(),
        ];
    }
}
