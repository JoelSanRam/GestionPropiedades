<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dato;
use App\Dimencion;
use App\Propiedad;
use App\Ubicacion;
use App\Valor;
use App\Coordenada;

class ReportController extends Controller
{
    public function reporte()
    {
        $entidades = DB::table('propiedads')->select('entidad_federativa')->distinct()->get();
        $localidades = DB::table('propiedads')->select('localidad')->distinct()->get();
        $propietarios = DB::table('propiedads')->select('propietario')->distinct()->get();
        $status = DB::table('propiedads')->select('estatus')->distinct()->get();
        return view('reportes.reporte', compact('entidades', 'localidades', 'propietarios', 'status'));
    }

    public function search(Request $request)
    {
        $entidad = $request->get('entidad');
        $localidad = $request->get('localidad');
        $propietario = $request->get('propietario');
        $status = $request->get('status');
        $option = $request->get('option');

        $datos = DB::table('propiedads')
                    ->orWhere('entidad_federativa', $entidad)
                    ->orWhere('localidad', $localidad)
                    ->orWhere('propietario', $propietario)
                    ->orWhere('estatus', $status)
                    ->join('ubicacions', 'propiedads.id', '=', 'ubicacions.id')
                    ->join('dimencions', 'propiedads.id', '=', 'dimencions.id')
                    ->join('valors', 'propiedads.id', '=', 'valors.id')
                    ->select(
                        'propiedads.*', 
                        'ubicacions.direccion', 
                        'dimencions.superficie_terreno', 
                        'valors.valor_comercial',
                        'valors.valor_catastral')->get();


        if ($option == "filtrar") {

            // Filtros 

            $entidades = DB::table('propiedads')->select('entidad_federativa')->distinct()->get();
            $localidades = DB::table('propiedads')->select('localidad')->distinct()->get();
            $propietarios = DB::table('propiedads')->select('propietario')->distinct()->get();
            $status = DB::table('propiedads')->select('estatus')->distinct()->get();

            return view('reportes.reporte', compact('datos', 'entidades', 'localidades', 'propietarios', 'status'));

        } else if($option == "reporte") {

            $pdf =  \PDF::loadView('reportes.pdf', ['data' => $datos])->setPaper('a4', 'landscape');

            return $pdf->stream('propiedades.pdf');
        }

    }

    public function pdfIndividual($id)
    {
        $propiedad = Propiedad::find($id);
        $dimencion = Dimencion::find($id);
        $ubicacion = Ubicacion::find($id);
        $valor = Valor::find($id);

        $pdf = \PDF::loadView('reportes.individual', [
                'propiedad' => $propiedad,
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor
            ])->setPaper('a4');

        return $pdf->stream('propiedad-individual.pdf');
    }

    /*public function search(Request $request)
    {
        $tipo = $request->get('tipo');
        $entidad = $request->get('entidad');
        $status = $request->get('status');
        $option = $request->get('option');

        // primero consulta a la db sobre datos de las propedades
        $prodiedades = DB::table('propiedads')->where([['tipo', $tipo], ['estatus', $status]]);

        // unimos con un subJoin los datos similares
        $datos = DB::table('datos')
                    ->where('entidad_federativa', $entidad)
                    ->joinSub($prodiedades, 'prodiedades', function($join){ // consultamos los datos los ids de las tablas
                        $join->on('datos.propiedad_id', '=', 'prodiedades.propiedad_id');
                    })
                    ->join('dimencions', 'datos.propiedad_id', '=', 'dimencions.propiedad_id')
                    ->join('valors', 'datos.propiedad_id', '=', 'valors.propiedad_id')
                    ->select('datos.*', 'prodiedades.tipo', 'prodiedades.estatus', 'dimencions.superficie_terreno', 'valors.valor_comercial','valors.valor_catastral')
                    ->get();

        if ($option == "filtrar") {

            return view('reportes.reporte', compact('datos'));

        } else if($option == "reporte") {
            $pdf =  \PDF::loadView('reportes.pdf', ['data' => $datos])->setPaper('a4', 'landscape');

            return $pdf->stream('propiedades.pdf');
        }

    }*/
}
