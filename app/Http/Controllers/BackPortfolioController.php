<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class BackPortfolioController extends Controller
{
    public function index (){
        $dataPortfolio = Portfolio::all();
        return view("backoffice.backPortfolio", compact("dataPortfolio"));
    }

    public function create(){
        return view ("backoffice.backPortfolio");
    }

    public function store(Request $request){
        $newEntry = new Portfolio;
        $newEntry->titre = $request->titre;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect() -> back();
    }
    public function delete(Portfolio $id){
        $id->delete();
        return redirect() -> back();
    }

    public function edit (Portfolio $id) {
        $newEntry = $id;
        return view('backoffice.updatePortfolio', compact('newEntry'));
    }

    public function update (Portfolio $id, Request $request) {
        $newEntry = $id;
        $newEntry->titre = $request->titre;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->back();
    }
}