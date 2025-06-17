<?php

namespace App\Http\Controllers;

use App\Models\Boodschap;
use Illuminate\Http\Request;


class BoodschapController extends Controller
{

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255', // Voorbeeldregels voor 'name'
        'email' => 'required|email|max:255',
        'boodschap' => 'required|string', // Voorbeeldregels voor 'boodschap'
        // Voeg hier eventuele andere validatieregels toe
    ]);

    $message = new Boodschap;
    $message->name = $validated['name'];
    $message->email = $validated['email'];
    $message->boodschap = $validated['boodschap'];
    $message->save();

    return redirect('/')->with('success', 'De boodschap is opgeslagen');
    // Of als je wilt doorsturen met een succesmelding:
    // return redirect('/')->with('success', 'Uw bericht is succesvol verzonden!');
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boodschappen = Boodschap::all();
	        return view('boodschappen')->with('boodschappen', $boodschappen);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Boodschap $boodschap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
	$boodschap = Boodschap::find($id);
	return view('edit')->with('boodschap', $boodschap);

     
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    
    $validated = $request->validate([
        'name' => 'required',
        'boodschap' => 'required'
    ]);

 
    $boodschap = Boodschap::find($request->input('id'));

    if (!$boodschap) {
        return back()->with('error', 'not found.');
    }

 
    $boodschap->email = $request->input('email');
    $boodschap->name = $validated['name']; 
    $boodschap->boodschap = $validated['boodschap'];
    $boodschap->straat = $request->input('straat');
    $boodschap->huisnummer = $request->input('huisnummer');
    $boodschap->save();

    return redirect('/boodschappen')->with('success', 'updated.');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)

    {
        
        Boodschap::destroy($id);
	    return redirect('/boodschappen');

    }

}
