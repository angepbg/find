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

    public function update(ContenidoRequest $request, $id)
    {
        
    }

    public function destroy($id)
    {
    }
}
