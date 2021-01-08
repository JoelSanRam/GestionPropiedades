<?php

namespace App\Imports;

use App\Propiedad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class PropiedadImport implements ToModel, WithValidation, WithHeadingRow, WithCalculatedFormulas
{
    use Importable;
    
    public function model(array $row)
    {
        return new Propiedad([
            'origen_id' => $row['origen_id'],
            'tipo' => $row['tipo'],
            'granja' => $row['granja'],
            'estatus' => $row['estatus'],
            'nombre_corto' => $row['nombre_corto'],
            'observaciones' => $row['observaciones'],
            'propietario' => $row['propietario'],
            'entidad_federativa' => $row['entidad_federativa'],
            'municipio' => $row['municipio'],
            'localidad' => $row['localidad'],
            'folio_regpub' => $row['folio_regpub'],
            'folio_catastral' => $row['folio_catastral'],
        ]);
    }

    // validation
    public function rules(): array
    {
        return [
            'tipo' => 'required',
            'estatus' => 'required',
            'nombre_corto' => 'required',
            'propietario' => 'required',
            'entidad_federativa' => 'required',

        ];
    }

    // message validation
    public function customValidationMessages()
    {
        return [
            'tipo.required' => 'El tipo es obligatorio.',
            'estatus.required' => 'El estatus es obligatorio.',
            'nombre_corto.required' => 'El nombre_corto es obligatorio.',
            'propietario.required' => 'El propietario es obligatorio.',
            'entidad_federativa.required' => 'La entidad_federativa es obligatorio.',
        ];
    }
}
