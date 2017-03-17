<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use App\Complaint;


class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $complaints = Complaint::all();
        return view('complaint.index', ['complaints' => $complaints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $opciones = DB::table('categories')->pluck('name', 'id')->all();
        // agregamos la opción 'Seleccione una Empresa' con índice 0 al array
/*        dd($opciones_denuncia);
        exit();*/
        return view('complaint.create', ['opciones' => $opciones]);
        //return view('complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            ]);
        //guardando los datos
        $complaint = new complaint;
        $complaint->title = $request->title;
        $complaint->description = $request->description;
        $complaint->categories_id = $request->get('categories_id');
        $complaint->save();

        Session::flash('message', 'La denuncia fue Creada con Exito');
        return Redirect::to('/complaint');
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
    $complaint = Complaint::findOrFail($id);
    return view('complaint.show', ['complaint'=>$complaint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaint = Complaint::findOrFail($id);
        // retornamos la vista
        return view('complaint.edit', compact('complaint'));
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
                //validacion
            $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            ]);
        // editando datos
            $complaint = Complaint::findOrFail($id);
            $complaint->title = $request->title;
            $complaint->description = $request->description;
            $complaint->save();

            Session::flash('message', 'La denuncia fue editada');
            return Redirect::to('/complaint');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();
        return redirect()->route('complaint.index')->with('alert-success', 'La denuncia fue eliminada');
    }
}
