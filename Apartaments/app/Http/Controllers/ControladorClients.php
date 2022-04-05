<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Clients;

class ControladorClients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Clients::all();
        return view('indexClient', compact('client'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcomeClients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'id' => 'required|max:11',
            'Dni' => 'required|max:255',
            'Nomcognoms' => 'required|max:255',
            'Edat' => 'required|max:11',
            'Tel' => 'required|max:11',
            'Adreca' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Pis' => 'required|max:255',
            'Email' => 'required|max:255',
            'Tipustargeta' => 'required',
            'Numtargeta' => 'required|max:11',
        ]);
        $client = Clients::create($nouClient);

        return redirect('/clients')->with('completed', 'Client creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */
    public function show($cli)
    {
        $client = DB::table('clients')->where('id', $cli)->first();
        $pdf = PDF::loadView('clientspdf', array('cli' =>$client))->setPaper('a4', 'landscape');
        return $pdf->download('client.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */
    public function edit($dni)
    {
        $client = Clients::findOrFail($dni);
        return view('actualitzaClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dni)
    {
        $dades = $request->validate([
            'id' => 'required|max:11',
            'Dni' => 'required|max:255',
            'Nomcognoms' => 'required|max:255',
            'Edat' => 'required|max:11',
            'Tel' => 'required|max:11',
            'Adreca' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Pis' => 'required|max:255',
            'Email' => 'required|max:255',
            'Tipustargeta' => 'required',
            'Numtargeta' => 'required|max:11',
        ]);
        Clients::whereId($dni)->update($dades);
        return redirect('/clients')->with('completed', 'Client actualitzat');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni)
    {
        $client = Clients::findOrFail($dni);
        $client->delete();
        return redirect('/clients')->with('completed', 'Client esborrat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */
    public function pdf($Dni)
    {
        $Client = Clients::findOrFail($Dni);
        if ($Client){
            $Dni = $Client->$Dni;
            $pdf = PDF::loadView('clientspdf', compact('Dni'));
            return $pdf->setPaper('A4', 'landscape')->download('indexClient.pdf');
        }
        
        $pdf = PDF::loadView('clientspdf', compact('Client'));
        return $pdf->download('indexClient.pdf');
    }
}
