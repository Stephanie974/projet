<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    /**
     * Affiche la liste des commandes
     */

    public function index()
    {

        $commandes = Commande::all();
        return view('commande.index', compact('commandes'));
    }


    /**
     * return le formulaire de creation d'une commande
     */
    public function create()
    {

        return view('commande.create');
    }


    /**
     * Enregistre une nouvelle commande dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'company' => 'required',
            'fortune' => 'required'
        ]);


        $commande = new Commande([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'company' => $request->get('company'),
            'fortune' => $request->get('fortune')
        ]);


        $commande->save();
        return redirect('/')->with('success', 'Commande Ajouté avec succès');
    }


    /**
     * Affiche les détails d'une commande spécifique
     */

    public function show($id)
    {

        $commande = Commande::findOrFail($id);
        return view('commande.show', compact('commande'));
    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $commande = Commande::findOrFail($id);

        return view('commande.edit', compact('commande'));
    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'company' => 'required',
            'fortune' => 'required'

        ]);




        $commande = Commande::findOrFail($id);
        $commande->nom = $request->get('nom');
        $commande->prenom = $request->get('prenom');
        $commande->company = $request->get('company');
        $commande->fortune = $request->get('fortune');


        $commande->update();

        return redirect('/')->with('success', 'Commande Modifié avec succès');
    }




    /**
     * Supprime la commande dans la base de données
     */
    public function destroy($id)
    {

        $commande = Commande::findOrFail($id);
        $commande->delete();

        return redirect('/')->with('success', 'Commande Modifié avec succès');
    }
} //
