<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Diplomatica;
class DiplomaticaController extends Controller
{
    /**
    * Muestra una lista de los Diplomatica.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los Diplomatica
      $diplomaticas = Diplomatica::get();
      return view('diplomatica.index')->with('diplomaticas', $diplomaticas);
    }

  public function edit($iddiplo)
  {
    $diplomaticas = Diplomatica::findOrFail($iddiplo);
    return view('diplomatica.edit',compact('diplomaticas'));
  }

  public function update(Request $request,$iddiplo)
  {
    $diplomaticas= Diplomatica::findOrFail($iddiplo);
    $diplomaticas->titulo=$request->input('titulo');
    $diplomaticas->fecha=$request->input('fecha');
    $diplomaticas->detalle=$request->input('detalle');
    $diplomaticas->save();
    return redirect()->route('diplomatica.index');
  }

  public function store(Request $request)
  {
    $diplomaticas = new Diplomatica;
    $diplomaticas->iddiplo=$request->input('iddiplo');
    $diplomaticas->titulo=$request->input('titulo');
    $diplomaticas->fecha=$request->input('fecha');
    $diplomaticas->detalle=$request->input('detalle');
    $diplomaticas->save();
    return redirect()->route('diplomatica.index');
  }
  
}