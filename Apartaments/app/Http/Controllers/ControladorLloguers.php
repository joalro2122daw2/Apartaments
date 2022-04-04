<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguers;
use PDF;

class ControladorLloguers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lloguer = Lloguers::all();
        return view('indexLloguer', compact('lloguer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcomeLloguers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'Dni' => 'required|max:255',
            'id' => 'required|max:11',
            'Datainici' => 'required',
            'Horainici' => 'required|max:11',
            'Datafi' => 'required',
            'Horafi' => 'required|max:11',
            'Lloclliuclaus' => 'required|max:255',
            'Llocdevclaus' => 'required|max:255',
            'Preudia' => 'required|max:11',
            'Diposit' => 'required|max:1',
            'Quantdiposit' => 'required|max:11',
            'Tipusasseguranca' => 'required',
        ]);
        $lloguer = Lloguers::create($nouLloguer);

        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
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
        $lloguer = Lloguers::findOrFail($id);
        return view('actualitzaLloguer', compact('lloguer'));
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
            'Dni' => 'required|max:255',
            'id' => 'required|max:11',
            'Datainici' => 'required',
            'Horainici' => 'required|max:11',
            'Datafi' => 'required',
            'Horafi' => 'required|max:11',
            'Lloclliuclaus' => 'required|max:255',
            'Llocdevclaus' => 'required|max:255',
            'Preudia' => 'required|max:11',
            'Diposit' => 'required|max:1',
            'Quantdiposit' => 'required|max:11',
            'Tipusasseguranca' => 'required',
        ]);
        Lloguers::whereId($id)->update($dades);
        return redirect('/lloguers')->with('completed', 'Lloguer actualitzat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lloguer = Lloguers::findOrFail($id);
        $lloguer->delete();
        return redirect('/lloguers')->with('completed', 'Lloguer esborrat');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id){
        $lloguer = Lloguers::findOrFail($id);
        
        if ($lloguer){
            $Dni = $lloguer->$Dni;
            $pdf = PDF::loadView('lloguerspdf', compact('Dni'));
            return $pdf->setPaper('a4', 'landscape')->download('indexLloguer.pdf');
        }
        
        $pdf = PDF::loadView('lloguerspdf', compact('lloguer'));
        return $pdf->download('indexLloguer.pdf');
    }
}
