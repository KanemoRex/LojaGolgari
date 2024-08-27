<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transportadora;

class TransportadoraController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $transportadoras = Transportadora::all();
    return view('transportadora.index', compact('transportadoras'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'nome' => 'required|max:255'
    ]);
    Transportadora::create($request->all());
    return redirect()->route('transportadora.index')
      ->with('success', 'Transportadora cadastrada com sucesso.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'nome' => 'required|max:255'
    ]);
    $transportadora = Transportadora::find($id);
    $transportadora->update($request->all());
    return redirect()->route('transportadora.index')
      ->with('success', 'Transportadora atualizada com sucesso.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $transportadora = Transportadora::find($id);
    $transportadora->delete();
    return redirect()->route('transportadora.index')
      ->with('success', 'Produto removido com sucesso');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('transportadora.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $transportadora = Transportadora::find($id);
    return view('transportadora.show', compact('transportadora'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $transportadora = Transportadora::find($id);
    return view('transportadora.edit', compact('transportadora'));
  }
}