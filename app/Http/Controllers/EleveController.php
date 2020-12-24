<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\Promo;
use App\Module;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->get('search');

        if($search){
            $eleves = Eleve::where('firstname', 'like', '%' . $search . '%')
            ->orWhere('lastname', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->get();
        } else {
            $eleves = Eleve::all();
        }

        return view("eleve.index", [
            "eleves" => $eleves,
            'current_module_id' => $request->get('module_id')
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Promo $promo)
    {
        $promo_id = $request->input("promo_id");
        return view('eleve.create', [
            'promos' => $promo, 
            'promo_id' => $promo_id,
            'current_module_id' => $request->input('module_id')
            ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $promo_id = $request->input('promo_id');

        $eleve = new Eleve;
        $eleve->firstName = $firstname;
        $eleve->lastName = $lastname;
        $eleve->email = $email;
        $eleve->promo_id = $promo_id;
        $eleve->save();

        return redirect()->route('eleve.index');
    }
    
    public function storeModule(Request $request){
        $eleve = Eleve::find($request->input("eleve_id"));
        $eleve->modules()->detach();
        $eleve->modules()->attach($request->input("modules"));

        return redirect()->route("eleve.index", ["eleve_id" => $eleve->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        return view('eleve.show', ['eleve' => $eleve]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        return view('eleve.edit', [
            'eleve' => $eleve,
            'promos' => Promo::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $promo = $request->input('promo');

        $eleve = Eleve::find($eleve->id);
        $eleve->firstName = $firstname;
        $eleve->lastName = $lastname;
        $eleve->email = $email;
        $eleve->promo_id = $promo;

        $eleve->save();

        return redirect()->route('eleve.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleve.index');
    }
}
