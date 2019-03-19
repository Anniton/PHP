<?php

class Exemple {

	public $Foo = 0; // doit etre une valeur scalaire, une constante
	private $_privateFoo = 'hello'; 

	function __construct() {
		print( 'Constructor called' . PHP_EOL );

		print('$this->Foo: ' . $this->Foo . PHP_EOL );//this interroge l'instance courante de ma clase sur son etat
		$this->Foo = 42;
		print( '$this->Foo: ' . $this->Foo . PHP_EOL );


		print('$this->privateFoo: ' . $this->Foo . PHP_EOL );//this interroge l'instance courante de ma clase sur son etat
		$this->_privateFoo = 'world';
		print( '$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL );


		$this->Bar();
		$this->_privateBar();
		return ;
	}

	function __destruct() {
		print( 'Destructor called' . PHP_EOL );
		return ;
	}

	function Bar() {
		print( 'Method Bar called' . PHP_EOL );
		return;
	}

	private function _privateBar() {
		print( 'Method _privateBar called' . PHP_EOL );
		return;
	}

}
//Instancier
$instance = new Exemple(); 

print( '$instance->Foo: ' . $instance->Foo .  PHP_EOL );
$instance->Foo = 100;
print( '$instance->Foo: ' . $instance->Foo .  PHP_EOL );

$instance->Bar();

/*
print( '$instance->privateFoo: ' . $instance->privateFoo .  PHP_EOL );
$instance->privateFoo = 100;
print( '$instance->privateFoo: ' . $instance->ptrivateFoo .  PHP_EOL );
$instance->privateBar();
 */


// la variable instance est egale a une nouvelle instance de la classe Exemple
// On peut rassembler des donnees = 
// attribut <=> variables
// fonctions <=> methodes

//print( '$instance->foo: ' . $instance->foo . PHP_EOL ); //affiche la valeur d'attribut foo
//$instance->foo = 42; // associe a foo la valeur 42
//print( '$instance->foo: ' . $instance->foo . PHP_EOL );

//$instance->bar();
//Visilibite, encapsulation, differenciation entre le code propre au client = utilise la class et le developpeur qui creer la classe
//
//si on ne met rien c'est public, si on met un  private devant c'est prive


?>
