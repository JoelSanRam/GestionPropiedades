<?php

namespace App\Imports;

use App\Propiedad;
use App\Ubicacion;
use App\Dimencion;
use App\Valor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class InformacionImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            /*User::create([
                'name' => $row[0],
            ]);*/

            Propiedad::create([
                'origen_id' => $row[0],
                'tipo' => $row[1],
                'granja' => $row[2],
                'estatus' => $row[3],
                'nombre_corto' => $row[4],
                'observaciones' => $row[5],
                'propietario' => $row[6],
                'entidad_federativa' => $row[7],
                'municipio' => $row[8],
                'localidad' => $row[9],
                'folio_regpub' => $row[10],
                'folio_catastral' => $row[11],
            ]);

            Ubicacion::create([
                'ejido' => $row[12],
                'parcela' => $row[13],
                'lote' => $row[14],
                'solar' => $row[15],
                'tablaje' => $row[16],
                'finca' => $row[17],
                'direccion' => $row[18],
                'ejido_manzana' => $row[19],
                'codigo_postal' => $row[20],
            ]);

            Dimencion::create([
                'superficie_construccion' => $row[21],
                'superficie_terreno' => $row[22],
                'frente' => $row[23],
                'fondo' => $row[24],
                'capacidad_granja' => $row[25],
            ]);

            Valor::create([
                'valor_construccion' => $row[26],
                'valor_comercial' => $row[27],
                'fecha_valor_comercial' => $row[28],
                'valor_catastral' => $row[29],
                'fecha_valor_catastral' => $row[30],
            ]);

        }
    }
}
