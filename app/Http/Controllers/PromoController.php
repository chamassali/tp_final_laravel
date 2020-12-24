<?php

namespace App\Http\Controllers;

use App\Promo;
use App\Eleve;
use Illuminate\Http\Request;

class PromoController extends Controller
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
            $promos = Promo::where('name', 'like', '%' . $search . '%')
            ->get();
        } else {
            $promos = Promo::all();
        }

        return view('promo.index', [
            'promos' => $promos,
            'current_module_id' => $request->get('module_id'),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $promos = Promo::all();
        return view('promo.create', [
            'promos' => $promos,
            'current_module_id' => $request->input('module_id'),
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
        $name = $request->input('promo');
        $specialty = $request->input('specialty');

        $promo = new Promo;
        $promo->name = $name;
        $promo->specialty = $specialty;
        $promo->save();

        return redirect()->route('promo.index');
    }

    public function storeModule(Request $request){
        $promo = Promo::find($request->input("promo_id"));
        $promo->modules()->detach();
        $promo->modules()->attach($request->input("modules"));

        return redirect()->route("promo.index", ["promo_id" => $promo->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        return view('promo.show', ['promo' => $promo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit', ['promo' => $promo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $name = $request->input('promo');
        $specialty = $request->input('specialty');

        $promo = Promo::find($promo->id);
        $promo->name = $name;
        $promo->specialty = $specialty;
        $promo->save();

        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('promo.index');
    }
}
