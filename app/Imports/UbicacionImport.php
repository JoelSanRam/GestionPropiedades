<?php

namespace App\Imports;

use App\Ubicacion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UbicacionImport implements ToModel, WithValidation, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return new Ubicacion([
            'ejido' => $row['ejido'],
            'parcela' => $row['ejido_parcela'],
            'lote' => $row['ejido_lote'],
            'solar' => $row['solar'],
            'tablaje' => $row['tablaje'],
            'finca' => $row['finca'],
            'direccion' => $row['direccion'],
            'ejido_manzana' => $row['ejido_manzana'],
            'codigo_postal' => $row['codigo_postal'],
        ]);
    }

    // validation
    public function rules(): array
    {
        return [
            'codigo_postal' => 'required',

        ];
    }

    // message validation
    public function customValidationMessages()
    {
        return [
            'codigo_postal.required' => 'El codigo_postal es obligatorio.',
        ];
    }
}
