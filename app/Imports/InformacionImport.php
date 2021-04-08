<?php

namespace App\Imports;

use App\Propiedad;
use App\Ubicacion;
use App\Dimencion;
use App\Valor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InformacionImport implements ToCollection, WithValidation, WithHeadingRow
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {

            Propiedad::create([
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

            Ubicacion::create([
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

            Dimencion::create([
                'superficie_construccion' => $row['superficie_construccion'],
                'superficie_terreno' => $row['superficie_terreno'],
                'frente' => $row['frente'],
                'fondo' => $row['fondo'],
                'capacidad_granja' => $row['capacidad_granja'],
            ]);

            Valor::create([
                'valor_construccion' => $row['valor_construccion'],
                'valor_comercial' => $row['estimacion_de_valor_del_terreno'], // cambio el nombre de columna
                'fecha_valor_comercial' => $row['fecha_estimacion_de_valor_del_terreno'], // cambio el nombre de columna
                'valor_catastral' => $row['valor_catastral'],
                'fecha_valor_catastral' => $row['fecha_valor_catastral'],
            ]);

        }
    }

    public function headingRow(): int
    {
        return 7;
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
            //
            'codigo_postal' => 'required',
            //
            'superficie_terreno' => 'required',
            //
            'estimacion_de_valor_del_terreno' => 'required',
            'valor_catastral' => 'required',
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
            //
            'codigo_postal.required' => 'El codigo_postal es obligatorio.',
            //
            'superficie_terreno.required' => 'La superficie_terreno es obligatoria.',
            //
            'estimacion_de_valor_del_terreno.required' => 'El estimacion_de_valor_del_terreno es obligatorio.', // cambio el nombre de columna
            'valor_catastral.required' => 'El valor_catastral es obligatorio.',
        ];
    }

}
