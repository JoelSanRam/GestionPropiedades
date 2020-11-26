<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TablesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'propiedades' => new PropiedadImport(),
            'ubicaciones' => new UbicacionImport(),
            'dimenciones' => new DimencionImport(),
            'valores' => new ValorImport(),
        ];
    }
}
