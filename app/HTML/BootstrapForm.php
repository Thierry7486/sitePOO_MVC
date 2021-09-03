<?php
namespace App\HTML;

class BootstrapForm extends \App\HTML\Form {

	protected function surround($html){
		return '<div class="col-12">'.$html.'</div>';
	}

	// ucwords met la première lettre en majuscule
	public function input($name,$type="text"){
		return $this->surround('
		
		<label for="'.$name.'">'.ucwords($name).'</label>
		<input type="'.$type.'" name="'.$name.'" class="form-control" value="'.$this->getValue($name).'">
		');
	}

	public function submit(){
		return $this->surround('<button class="btn btn-primary" type="submit">Envoyer</button>'); 
	}

}