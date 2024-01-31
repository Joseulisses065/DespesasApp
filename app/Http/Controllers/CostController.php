<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostRequest;
use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    //
    public function index(Cost $costs){
        $exit = 0;
        $entry = 0;
        foreach($costs->all() as $cost){
            if($cost->type == 'entry'){
                $entry+=$cost->value;
            }else{
                $exit+= $cost->value;
            }
        }
        $balance = $entry-$exit;

        return view('cost.index')->with('costs',$costs)->with('entry',$entry)->with('exit',$exit)->with('balance',$balance);
    }

    public function store(CostRequest $request){

        $costs = Cost::create($request->all());
        $costs->save();

        return to_route('cost.index')->with('success','Salvo com sucesso');


    }

    public function destroy(Cost $cost){

        $cost->delete();
        return to_route('cost.index')->with('success','Removido com sucesso');


    }
}
