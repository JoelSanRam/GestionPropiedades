<?php

namespace App\Imports;

use App\Propiedad;
use App\Ubicacion;
use App\Dimencion;
use App\Valor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InformacionImport implements ToCollection, WithHeadingRow
{

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
                'valor_comercial' => $row['valor_comercial'],
                'fecha_valor_comercial' => $row['fecha_valor_comercial'],
                'valor_catastral' => $row['valor_catastral'],
                'fecha_valor_catastral' => $row['fecha_valor_catastral'],
            ]);

        }
    }
}
