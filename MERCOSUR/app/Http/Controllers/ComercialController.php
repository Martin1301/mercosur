<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comercial;
class ComercialController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los comercial
      $comercial = Comercial::get();
      return view('comercial.index')->with('comercial', $comercial);
    }

  public function edit($idcomer)
  {
    $comercial = Comercial::findOrFail($idcomer);
    return view('comercial.edit',compact('comercial'));
  }

  public function update(Request $request,$idcalzado)
  {
    $comercial= Comercial::findOrFail($idcomer);
    $comercial->pais_miembro_nombre=$request->input('pais_miembro_nombre');
    $comercial->tipo=$request->input('tipo');
    $comercial->pais_extranjero_nombre=$request->input('pais_extranjero_nombre');
    $comercial->porcentaje=$request->input('porcentaje');
    $comercial->save();
    return redirect()->route('comercial.index');
  }
  
  public function store(Request $request)
  {
    $comercial = new Comercial;
    $comercial->idcomer=$request->input('idcomer');
    $comercial->pais_miembro_nombre=$request->input('pais_miembro_nombre');
    $comercial->tipo=$request->input('tipo');
    $comercial->pais_extranjero_nombre=$request->input('pais_extranjero_nombre');
    $comercial->porcentaje=$request->input('porcentaje');
    $comercial->save();
    return redirect()->route('comercial.index');
  }
}
