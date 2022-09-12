<?php

namespace App\Http\Controllers;

use App\Models\Automatisme;
use Illuminate\Http\Request;

class AutomatismeController extends Controller
{
    public function get_all_automatisme(){
        $automatisme = Automatisme::all();
        return response()->json([
            'automatisme' => $automatisme
        ],200);
    }

    public function add_automatisme(Request $request){
        $automatisme = new Automatisme();
        $automatisme->Nom_automatisme = $request->Nom_automatisme;
        $automatisme->projet = $request->projet;
        $automatisme->campagne = $request->campagne;
        $automatisme->save();
    }

    public function get_edit_automatisme($id){
        $automatisme = Automatisme::find($id);
        return response()->json([
            'automatisme' => $automatisme
        ],200);
    }

    public function update_automatisme(Request $request,$id){
        $automatisme = Automatisme::find($id);
        $automatisme->Nom_automatisme = $request->Nom_automatisme;
        $automatisme->projet = $request->projet;
        $automatisme->campagne = $request->campagne;
        $automatisme->save();
    }

    public function delete_automatisme($id){
        $automatisme = Automatisme::findOrfail($id);
        $automatisme->delete();
    }


}
