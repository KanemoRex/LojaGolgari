<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;

class PedidoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $pedidos = Pedido::with('produtos')->get();
    $produtos = Produto::all();
   
    return view('pedido.index', compact('pedidos', 'produtos'));
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
      'nf' => 'required',
      'datapedido' => 'required'
    ]);
    $id = Pedido::create($request->all())->id;

    if($produtos = $request->input('produto')){
      foreach($produtos as $produto){
        PedidoProduto::create([
          'pedido_id' => $id,
          'produto_id' => $produto
        ]);
      }
    }

    return redirect()->route('pedido.index')
      ->with('success', 'Pedido cadastrado com sucesso.');
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
      'nf' => 'required',
      'datapedido' => 'required'
    ]);
    //exclui os itens do pedido
    while($pedidoprodutos = PedidoProduto::where('pedido_id', $id)->first()){
      $pedidoprodutos->delete();
    }
    //reinsere os itens atualizados
    if($produtos = $request->input('produto')){
      foreach($produtos as $produto){
        PedidoProduto::create([
          'pedido_id' => $id,
          'produto_id' => $produto
        ]);
      }
    }
    //atualiza o cabeçalho do pedido
    $pedido = Pedido::find($id);
    $pedido->update($request->all());
    return redirect()->route('pedido.index')
      ->with('success', 'Pedido atualizado com sucesso.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //exclui os itens do pedido
    while($pedidoprodutos = PedidoProduto::where('pedido_id', $id)->first()){
      $pedidoprodutos->delete();
    }
    
    //exclui pedido
    $pedido = Pedido::find($id);
    $pedido->delete();
    return redirect()->route('pedido.index')
      ->with('success', 'Pedido removido com sucesso');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $produtos = Produto::all();
    return view('pedido.create', compact('produtos'));
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $pedido = Pedido::find($id);
    //pega os itens do pedido
    $pedidoprodutos = PedidoProduto::where('pedido_id', $id)->get();
    return view('pedido.show', compact('pedido', 'pedidoprodutos'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $pedido = Pedido::find($id);
    $produtos = Produto::all();
    $pedidoprodutos = PedidoProduto::where('pedido_id', $id)->get();
    return view('pedido.edit', compact('pedido', 'produtos', 'pedidoprodutos'));
  }
}