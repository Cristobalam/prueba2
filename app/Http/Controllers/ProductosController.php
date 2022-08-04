<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Producto;
use DataTables;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Producto::all();
        if ($request->ajax()) {
            // $data = Producto::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'"
                        data-original-title="Edit" class="edit btn btn-primary btn-sm editProd">Editar</a>';

                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'"
                        data-original-title="Delete" class="btn btn-danger btn-sm deleteProd">Eliminar</a>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        
        return view('productos', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::updateOrCreate(['id' => $request->id],
                [
                    'codigo' => $request->codigo,
                    'nombre' => $request->nombre,
                    'categoria' => $request->categoria,
                    'sucursale_id' => $request->sucursale_id,
                    'descripcion' => $request->descripcion,
                    'cantidad' => $request->cantidad,
                    'precio' => $request->precio
                ]);        
   
        return response()->json(['success'=>'Producto Guardado.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return response()->json($producto);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::find($id)->delete();
     
        return response()->json(['success'=>'Producto eliminado.']);
    }
}
