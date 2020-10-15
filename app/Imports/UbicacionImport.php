<?php

namespace App\Imports;

use App\Ubicacion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UbicacionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ubicacion([
            'propiedad_id' => $row['propiedad_id'],
            'ejido' => $row['ejido'],
            'parcela' => $row['parcela'],
            'solar' => $row['solar'],
            'tablaje' => $row['tablaje'],
            'finca' => $row['finca'],
            'direccion' => $row['direccion'],
            'colonia' => $row['colonia'],
            'ejido_manzana' => $row['ejido_manzana'],
            'urbana_manzana' => $row['urbana_manzana'],
            'lote' => $row['lote'],
            'codigo_postal' => $row['codigo_postal'],
            'propietario' => $row['propietario'],
        ]);
    }
}
