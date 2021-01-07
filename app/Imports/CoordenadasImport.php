<?php

namespace App\Imports;

use App\Coordenada;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoordenadasImport implements ToModel, WithValidation, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new Coordenada([
            'propiedad_id' => $row['propiedad_id'],
            'lat' => $row['latitud'],
            'lng' => $row['longitud'],
            'marcador' => $row['marcador'],
        ]);
    }

    // validation
    public function rules(): array
    {
        return [
            'propiedad_id' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',

        ];
    }

    // message validation
    public function customValidationMessages()
    {
        return [
            'propiedad_id.required' => 'El propiedad_id es obligatorio.',
            'latitud.required' => 'La latitud es obligatoria.',
            'longitud.required' => 'La longitud es obligatoria.',
        ];
    }
}
