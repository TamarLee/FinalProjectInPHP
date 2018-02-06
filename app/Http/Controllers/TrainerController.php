<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Trainer;
class TrainerController extends Controller
{
	public function showTrainer(){
		$trainer = Trainer::all();
    	return view('trainer', [
    		'trainer'=>$trainer
    	]);
    }
}