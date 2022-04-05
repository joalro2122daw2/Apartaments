<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;
use PDF;
use Illuminate\Support\Facades\DB;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuari = Usuaris::all();
        return view('indexUsuaris', compact('usuari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcomeUsuaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'Nomcognoms' => 'required|max:255',
            'Email' => 'required|max:255',
            'Contrasenya' => 'required|max:255',
            'Tipus' => 'required|max:255',
            'Horaent' => 'required|max:11',
            'Horasort' => 'required|max:255',
        ]);
        $usuari = Usuaris::create($nouUsuari);

        return redirect('/usuaris')->with('completed', 'Usuari creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($usu)
    {
        $usuari = DB::table('usuaris')->where('id', $usu)->first();
        $pdf = PDF::loadView('usuarispdf', array('usu' =>$usuari))->setPaper('a4', 'landscape');
        return $pdf->download('usuari.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuari = Usuaris::findOrFail($id);
        return view('actualitzaUsuari', compact('usuari'));
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
        $dades = $request->validate([
            'Nomcognoms' => 'required|max:255',
            'Email' => 'required|max:255',
            'Contrasenya' => 'required|max:255',
            'Tipus' => 'required|max:255',
            'Horaent' => 'required|max:11',
            'Horasort' => 'required|max:255',
        ]);
        Usuaris::whereId($id)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuari = Usuaris::findOrFail($id);
        $usuari->delete();
        return redirect('/usuaris')->with('completed', 'Usuari esborrat');
    }
}
