<?php

namespace App\Imports;

use App\Valor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ValorImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Valor([
            'valor_construccion' => $row['valor_construccion'],
            'valor_comercial' => $row['valor_comercial'],
            'fecha_valor_comercial' => $row['fecha_valor_comercial'],
            'valor_catastral' => $row['valor_catastral'],
            'fecha_valor_catastral' => $row['fecha_valor_catastral'],
        ]);
    }
}
