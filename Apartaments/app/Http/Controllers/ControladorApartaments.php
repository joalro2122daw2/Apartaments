<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartaments;
use PDF;
use Illuminate\Support\Facades\DB;

class ControladorApartaments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartament = Apartaments::all();
        return view('index', compact('apartament'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouApartament = $request->validate([
            'id' => 'required|max:255',
            'Referenciacatastral' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Barri' => 'required|max:255',
            'Nomcarrer' => 'required|max:255',
            'Numcarrer' => 'required|max:11',
            'Pis' => 'required|max:255',
            'Nombrellits' => 'required|max:11',
            'Nombrehabitacions' => 'required|max:11',
            'Ascensor' => 'required|max:1',
            'Calefaccio' => 'required',
            'Airecondicionat' => 'required|max:1'
        ]);
        $apartament = Apartaments::create($nouApartament);

return redirect('/apartaments')->with('completed', 'Apartament creat!');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $apart)
    {
        $apartament = DB::table('apartaments')->where('id', $apart)->first();
        $pdf = PDF::loadView('apartamentspdf', array('apart' =>$apartament))->setPaper('a4', 'landscape');
        return $pdf->download('apartaments.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartament = Apartaments::findOrFail($id);
        return view('actualitza', compact('apartament'));

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
            'id' => 'required|max:255',
            'Referenciacatastral' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Barri' => 'required|max:255',
            'Nomcarrer' => 'required|max:255',
            'Numcarrer' => 'required|max:11',
            'Pis' => 'required|max:255',
            'Nombrellits' => 'required|max:11',
            'Nombrehabitacions' => 'required|max:11',
            'Ascensor' => 'required|max:1',
            'Calefaccio' => 'required',
            'Airecondicionat' => 'required|max:1'
        ]);

        Apartaments::whereCodi_unic($id)->update($dades);
        return redirect('/apartaments')->with('completed', 'Apartament actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartament = Apartaments::findOrFail($id);
        $apartament->delete();
        return redirect('/apartaments')->with('completed', 'Apartament esborrat');

    }
        
}
