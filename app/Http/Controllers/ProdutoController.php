<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $produtos = Produto::all();
    return view('produto.index', compact('produtos'));
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
      'nome' => 'required|max:255',
      'descricao' => 'required',
    ]);
    //Upload de arquivo
    if($request->hasFile('imagem')){
      
        $image = $request->file('imagem');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();


        // pasta de imagens
        $destinationPath = public_path('/images');

        $image->move($destinationPath, $input['imagename']);
    }
    Produto::create([
      'nome' => $request->input("nome"),
      'descricao' => $request->input("descricao"),
      'imagem' => $input['imagename']
    ]);
    return redirect()->route('produto.index')
      ->with('success', 'Produto cadastrado com sucesso.');
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
      'nome' => 'required|max:255',
      'descricao' => 'required',
    ]);
    $produto = Produto::find($id);
    $produto->update($request->all());
    return redirect()->route('produto.index')
      ->with('success', 'Produto atualizado com sucesso.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $produto = Produto::find($id);
    
    if($imagem = $produto["imagem"]){
      unlink("../public/images/".$imagem);
    }
    $produto->delete();
    return redirect()->route('produto.index')
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
    return view('produto.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $produto = Produto::find($id);
    return view('produto.show', compact('produto'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $produto = Produto::find($id);
    return view('produto.edit', compact('produto'));
  }
}