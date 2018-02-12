<?PHP
namespace Nick\Controllers;

class Nika
{
	public function __construct(){
		$this->sayHi();
	}
	
	public function sayHi(){
		echo "<BR><BR>Hi from Nika class";
	}
}