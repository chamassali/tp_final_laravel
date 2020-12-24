<?php

namespace App\Http\Controllers;

use App\Module;
use App\Eleve;

use Illuminate\Http\Request;

class ModuleController extends Controller
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
            $modules = Module::where('name', 'like', '%' . $search . '%')
            ->get();
        } else {
            $modules = Module::all();
        }

        return view('module.index', [
            'modules' => $modules,
            'current_promo_id' => $request->get('promo_id'),
            'current_eleve_id' => $request->get('eleve_id')
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $modules = Module::all();
        return view('module.create', [
            'modules' => $modules,
            'current_promo_id' => $request->input('promo_id'), 
            'current_eleve_id' => $request->input('eleve_id')

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
        $name = $request->input('module');
        $description = $request->input('description');

        $module = new Module;
        $module->name = $name;
        $module->description = $description;
        $module->save();

        return redirect()->route('module.index');
    }

    public function storePromo(Request $request){
        $module = Module::find($request->input("module_id"));
        $module->promos()->detach();
        $module->promos()->attach($request->input("promos"));

        return redirect()->route("module.index", ["module_id" => $module->id]);
    }

    public function storeEleve(Request $request){
        $module = Module::find($request->input("module_id"));
        $module->eleves()->detach();
        $module->eleves()->attach($request->input("eleves"));

        return redirect()->route("module.index", ["module_id" => $module->id]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('module.show', ['module' => $module]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('module.edit', ['module' => $module]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $name = $request->input('module');
        $description = $request->input('description');

        $module = Module::find($module->id);
        $module->name = $name;
        $module->description = $description;
        $module->save();

        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('module.index');
    }
}
