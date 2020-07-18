<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use Exception;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{

    // Index -> Trazer todas areas
    // Store -> Salvar uma área
    // Show -> Visualizar uma área
    // Update -> Realizar atualiação de uma área
    // Destroy -> Remover uma área

    /**
     * @var \App\Models\Area
     */
    protected $model;

    public function __construct(Area $area)
    {
        $this->model = $area;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = $this->model->all();
        return response()->json($areas, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        // para o código aqui
        try {
            $area = new Area();
            $area->fill($request->all());
            $area->save();

            return response()->json($area, 201);
        } catch (Exception $e) {
            return response()->json([
                'title' => 'Erro',
                'msg' => 'Erro interno do servidor'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $area = $this->model->findOrFail($id);
            return response()->Json($area);
        } catch (Exception $e) {
            return response()->json([
                'title' => 'Erro',
                'msg' => 'Erro interno do servidor'
            ], 500);
        }
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
        try {
            $area = $this->model->find($id);
            $area->fill($request->all());
            $area->save();

            return response()->json($area, 200);
        } catch (Exception $e) {
            return response()->json([
                'title' => 'Erro',
                'msg' => 'Erro interno do servidor'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $area = $this->model->find($id);
            $area->delete();
 
            return response()->json([], 204);
        } catch(Exception $e) {
            return response()->json([
                'title' => 'erro',
                'msg' => 'Erro interno do servidor'
            ], 500);
        }
       
    }
}
