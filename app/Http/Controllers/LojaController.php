<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Loja;

class LojaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $lojas = Loja::all();
    return view('loja.index', compact('lojas'));
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
      'nomeloja' => 'required|max:255'
    ]);

    //Upload de arquivo
    if($request->hasFile('imagem')){
      
      $image = $request->file('imagem');

      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();


      // pasta de imagens
      $destinationPath = public_path('/images');

      $image->move($destinationPath, $input['imagename']);
  }

    Loja::create([
        'nomeloja' => $request->input("nomeloja"),
        'cnpj' => $request->input("cnpj"),
        'imagem' => $input['imagename']
    ]);
    return redirect()->route('loja.index')
      ->with('success', 'Loja cadastrada com sucesso.');
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
      'nomeloja' => 'required|max:255'
    ]);
    $loja = Loja::find($id);
    $loja->update($request->all());
    return redirect()->route('loja.index')
      ->with('success', 'Loja atualizada com sucesso.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $loja = Loja::find($id);
    if($imagem = $loja["imagem"]){
      unlink("../public/images/".$imagem);
    }
    $loja->delete();
    return redirect()->route('loja.index')
      ->with('success', 'Loja removida com sucesso');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('loja.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $loja = Loja::find($id);
    return view('loja.show', compact('loja'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $loja = Loja::find($id);
    return view('loja.edit', compact('loja'));
  }
}