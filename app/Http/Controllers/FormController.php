<?php

namespace App\Http\Controllers;

use App\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        //
    }
    public function banane(Request $request,form $form)
    {
        $input = $request->all();
        $form->nom = $input['nom'];
        $form->prenom = $input['prenom'];
        $form->date = $input['date'];
        $form->telephone = $input['telephone'];
        $form->email = $input['email'];
        $form->grade = $input['grade'];
        $form->unite = $input['unite'];
        $form->texte = $input['texte'];
        $form->information_complementaire = $input['information_complementaire'];

        
        $form->save();

        // $p_action = 0;
        // $form_id = null;
        $list_form = form::all();

        return view('home',compact('list_form '));
    }


}
