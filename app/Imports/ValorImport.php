<?php

namespace App\Imports;

use App\Valor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ValorImport implements ToModel, WithValidation, WithHeadingRow, WithCalculatedFormulas
{
    use Importable;

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

    // validation
    public function rules(): array
    {
        return [
            'valor_comercial' => 'required',
            'valor_catastral' => 'required',

        ];
    }

    // message validation
    public function customValidationMessages()
    {
        return [
            'valor_comercial.required' => 'El valor_comercial es obligatorio.',
            'valor_catastral.required' => 'El valor_catastral es obligatorio.',
        ];
    }
}
