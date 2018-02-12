<?PHP
namespace Nick\Controllers;

class Nick
{
	public function __construct(){
		$this->sayHi();
	}
	
	public function sayHi(){
		echo "<BR><BR>Hi from Nick class";
	}
}