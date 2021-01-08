<?php

namespace App\Imports;

use App\Dimencion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class DimencionImport implements ToModel, WithValidation, WithHeadingRow, WithCalculatedFormulas
{
    use Importable;

    public function model(array $row)
    {
        return new Dimencion([
            'superficie_construccion' => $row['superficie_construccion'],
            'superficie_terreno' => $row['superficie_terreno'],
            'frente' => $row['frente'],
            'fondo' => $row['fondo'],
            'capacidad_granja' => $row['capacidad_granja'],
        ]);
    }

    // validation
    public function rules(): array
    {
        return [
            'superficie_terreno' => 'required',

        ];
    }

    // message validation
    public function customValidationMessages()
    {
        return [
            'superficie_terreno.required' => 'La superficie_terreno es obligatoria.',
        ];
    }
}
