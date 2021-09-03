<?php
namespace App\HTML;
/** 
 * Class Form
 * Permet de générer des éléments de formulaire rapidement facilement ...
 */

// les classes se nomme toujours avec une majuscule

class Form{
	/**
	 * @var array Données utilisées par le formulaire
	 */
	private $data; // on pourrait l'écrire de cette manière, mais c'est préférable de l'indiquer dans le construct = array();
// on pourrait écrire protected $data si l'on veut que les enfants de la classe aient accès à cette propriété
/**
 * @var string Tag utilisé pour entourer les champs du formulaire
 */
	public $surround='p';

/**
 * @param array $data permet de renseigner l'atribut value des champs
 */
	public function __construct($data=array())
	{
		$this->data = $data;
	}

	protected function surround($html){
		return '<'.$this->surround.'>'.$html.'</'.$this->surround.'>';
	}

	protected function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	/**
	 * @param string $name permet de préciser le nom du champs input
	 * @param string $type permet de préciser le type du champs input
	 * @return string retourne un champs input formaté
	 */
	public function input($name,$type="text"){
		return $this->surround('<input type="'.$type.'" name="'.$name.'" value="'.$this->getValue($name).'">');
	}

	public function submit(){
		return $this->surround('<button type="submit">Envoyer</button>'); 
	}

	public function displayDate(){
		// en mettant \ devant DateTime() on lui demande de revenir au namespace de PHP
		$d = new \DateTime();
		return $d->format('Y-m-d');
	}
}