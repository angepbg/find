<?php

namespace App\Http\Controllers;

use App\Matriz;
use Illuminate\Http\Request;

class MatricesController extends Controller
{
    public function index()
    {
    	$vector = array();
    	$vector[0] = new Matriz(3,3);
    	$vector[0]->fill_one();
    	$vector[1] = new Matriz(1,10);
    	$vector[1]->fill_two();
    	$vector[2] = new Matriz(5,5);
    	$vector[2]->fill_three();
    	$vector[3] = new Matriz(7,2);
    	$vector[3]->fill_four();
    	return view('home')
    	->with('vectores',$vector);
    }
    public function create()
    {	
    	$vectores = $_GET['vectores'];
    	$valor = $_GET['valor'];
    	$cont = 0;
    	for($i=0; $i< $vectores[$valor]['fil']; $i++){
    		for ($j=0; $j < $vectores[$valor]['col'] ; $j++) { 
    			if($vectores[$valor]['matriz'][$i][$j] === 'i'){
    				//arriba y abajo
    				if($i > 0 && $i < ($vectores[$valor]['fil'] - 1) ){
    					if( $vectores[$valor]['matriz'][$i-1][$j] === 'e' && $vectores[$valor]['matriz'][$i+1][$j] === 'o' ){
    						$cont++;
    					}
    					else{
    						if( $vectores[$valor]['matriz'][$i-1][$j] === 'o' && $vectores[$valor]['matriz'][$i+1][$j] === 'e' ){
    							$cont++;
    						}
    					}
    				}
    				// //izquierda y derecha
    				if($j > 0 && $j < ($vectores[$valor]['col'] - 1) ){
    					if( $vectores[$valor]['matriz'][$i][$j-1] === 'e' && $vectores[$valor]['matriz'][$i][$j+1] === 'o' ){
    						$cont++;
    					}
    					else{
    						if( $vectores[$valor]['matriz'][$i][$j-1] === 'o' && $vectores[$valor]['matriz'][$i][$j+1] === 'e' ){
    							$cont++;
    						}
    					}
    				}
    				//diagonal principal
    				if($i > 0 && $i < ($vectores[$valor]['fil'] - 1) && $j>0 && $j < ($vectores[$valor]['col'] - 1)  ) {
    					
    					if( $vectores[$valor]['matriz'][$i-1][$j-1] === 'e' && $vectores[$valor]['matriz'][$i+1][$j+1] === 'o' ){
    						$cont++;
    					}
    					else{
    						if( $vectores[$valor]['matriz'][$i-1][$j-1] === 'o' && $vectores[$valor]['matriz'][$i+1][$j+1] === 'e' ){
	    						$cont++;
	    					}
    					}
    				}
    				//diagonal secundaria
    				if($i>0 && $i < ($vectores[$valor]['fil'] - 1) && $j>0 && $j < ($vectores[$valor]['col'] - 1) ){
    					if( $vectores[$valor]['matriz'][$i-1][$j+1] === 'e' && $vectores[$valor]['matriz'][$i+1][$j-1] === 'o' ){
    						$cont++;
    					}
    					else{
    						if( $vectores[$valor]['matriz'][$i-1][$j+1] === 'o' && $vectores[$valor]['matriz'][$i+1][$j-1] === 'e' ){
	    						$cont++;
	    					}
    					}
    				}
    			}
    		}
    	}
    	echo $cont;
    } 
    public function store(Request $request)
    {
    	
    }
    public function edit($id)
    {
    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
    }
}
