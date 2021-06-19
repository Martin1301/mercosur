<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PaisM;
class PaisMController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los comercial
      $miembro = PaisM::get();
      return view('paisM.index')->with('miembro', $miembro);
    }

    public function destroy($idpais_miembro)
    {
      PaisM::destroy($idpais_miembro);
      return redirect('paisM')->with('success','Registro eliminado satisfactoriamente');
    }

  public function edit($idpais_miembro)
  {
    $miembro = PaisM::findOrFail($idpais_miembro);
    return view('paisM.edit',compact('idpais_miembro'));
  }

  public function update(Request $request,$idpais_miembro)
  {
    $miembro= PaisM::findOrFail($idpais_miembro);
    $miembro->nombre=$request->input('nombre');
    $miembro->save();
    return redirect()->route('paisM.index');
  }

  public function store(Request $request)
  {
    $miembro = new PaisM;
    $miembro->idpais_miembro=$request->input('idpais_miembro');
    $miembro->nombre=$request->input('nombre');
    $miembro->save();
    return redirect()->route('paisM.index');
  }
  
}