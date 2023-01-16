<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BellmanFordController extends Controller
{
    public function index()
    {
        return view('bellman-ford.index');
    }

    public function calculate(Request $request)
    {
        // Obtenir l'entrée de l'utilisateur
        $numSommet = $request->input('num_sommet');
        $numArcs = $request->input('num_arcs');
        $debutSommet = $request->input('debut_sommet');
        $arcs = $request->input('arcs');

        // Initialise le tableau de distance
        $dist = array();
        for ($i = 0; $i < $numSommet; $i++) {
            $dist[$i] = PHP_INT_MAX;
        }
        $dist[$debutSommet] = 0;

        // Analyse des arcs et des poids à partir de l'entrée utilisateur
        $arcs = explode(",", $arcs);
        $graph = array();
        foreach ($arcs as $arc) {
            $arc = explode(" ", $arc);
            $graph[$arc[0]][$arc[1]] = $arc[2];
        }

        // Exécuter l'algorithme de Bellman-Ford
        for ($i = 1; $i <= $numSommet - 1; $i++) {
            foreach ($graph as $u => $adj) {
                foreach ($adj as $v => $poid) {
                    if ($dist[$u] != PHP_INT_MAX && $dist[$u] + $poid < $dist[$v]) {
                        $dist[$v] = $dist[$u] + $poid;
                    }
                }
            }
        }

        // Vérifie les cycles de poid négatifs
        for ($i = 1; $i <= $numSommet - 1; $i++) {
            foreach ($graph as $u => $adj) {
                foreach ($adj as $v => $poid) {
                    if ($dist[$u] != PHP_INT_MAX && $dist[$u] + $poid < $dist[$v]) {
                        return "Le graphe contient un cycle de poids négatif";
                    }
                }
            }
        }

        // Retourne le resulta
        return view('bellman-ford.result', ['dist' => $dist]);
    }
}

