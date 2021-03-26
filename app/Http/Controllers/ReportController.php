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
use App\Image;

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
                    ->when($entidad, function ($query, $entidad) {
                        return $query->where('entidad_federativa', $entidad);
                    })
                    ->when($localidad, function ($query, $localidad) {
                        return $query->where('localidad', $localidad);
                    })
                    ->when($propietario, function ($query, $propietario) {
                        return $query->where('propietario', $propietario);
                    })
                    ->when($status, function ($query, $status) {
                        return $query->where('estatus', $status);
                    })
                    ->join('ubicacions', 'propiedads.id', '=', 'ubicacions.id')
                    ->join('dimencions', 'propiedads.id', '=', 'dimencions.id')
                    ->join('valors', 'propiedads.id', '=', 'valors.id')
                    ->select(
                        'propiedads.*', 
                        'ubicacions.*', 
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
        $images = Image::where('propiedad_id', $id)->get();

        $pdf = \PDF::loadView('reportes.individual', [
                'propiedad' => $propiedad,
                'dimencion' => $dimencion, 
                'ubicacion' => $ubicacion, 
                'valor' => $valor,
                'images' => $images
            ])->setPaper('a4');

        return $pdf->stream('propiedad-individual.pdf');
    }

}
