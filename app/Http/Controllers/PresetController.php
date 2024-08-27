<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Preset;

class PresetController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $presets = Preset::all();
    return view('preset.index', compact('presets'));
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
      'user_id' => 'required'
    ]);
    Preset::create($request->all());
    return redirect()->route('preset.index')
      ->with('success', 'Preset cadastrado com sucesso.');
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
      'user_id' => 'required'
    ]);
    $preset = Preset::find($id);
    $preset->update($request->all());
    return redirect()->route('preset.index')
      ->with('success', 'Preset atualizado com sucesso.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $preset = Preset::find($id);
    $preset->delete();
    return redirect()->route('preset.index')
      ->with('success', 'Preset removido com sucesso');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('preset.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $preset = Preset::find($id);
    return view('preset.show', compact('preset'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $preset = Preset::find($id);
    return view('preset.edit', compact('preset'));
  }
}