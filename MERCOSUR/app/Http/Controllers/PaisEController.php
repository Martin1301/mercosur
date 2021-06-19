<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PaisE;
class PaisEController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los comercial
      $extranjero = PaisE::get();
      return view('paisE.index')->with('extranjero', $extranjero);
    }
    
  public function edit($idpais_extranjero)
  {
    $extranjero = PaisE::findOrFail($idpais_extranjero);
    return view('paisE.edit',compact('idpais_extranjero'));
  }

  public function update(Request $request,$idpais_extranjero)
  {
    $extranjero= PaisE::findOrFail($idpais_extranjero);
    $extranjero->nombre=$request->input('nombre');
    $extranjero->save();
    return redirect()->route('paisE.index');
  }

  public function store(Request $request)
  {
    $extranjero = new PaisE;
    $extranjero->idpais_extranjero=$request->input('idpais_extranjero');
    $extranjero->nombre=$request->input('nombre');
    $extranjero->save();
    return redirect()->route('paisE.index');
  }
}