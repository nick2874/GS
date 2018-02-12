<?PHP
namespace Nick\Libraries;

class Core 
{
	public $currentController="index";
	protected $currentMethod="index";
	protected $params=[];	
	protected $controllerPath;
	protected $controller;
		
	public function __construct(){
		$this->getURL();
		// echo "Controller: " . $this->currentController . "<BR>";
		// echo "Method: ". $this->currentMethod . "<BR>";
		// echo "Params: "; print_r($this->params);
		$this->controllerPath="\Nick\Controllers\\".$this->currentController;
		$this->getController();
	}

	public function getURL(){
		if(isset($_GET['url'])){
			$arr=explode('/',$_GET['url']);			
			if(isset($arr[0])){
				$this->currentController=ucwords($arr[0]);
				unset($arr[0]);
			}else{
				$this->currentController=ucwords($this->currentController);
				echo "controller: ". $this->currentController;
			};
			if(isset($arr[1])){
				$this->currentMethod=ucwords($arr[1]);
				unset($arr[1]);
			};
			if(isset($arr)){
				$this->params=array_values($arr);
				unset($arr[1]);
			};			
		}else{
			$this->currentController="Index";
			$this->currentMethod="index";
			$params=[];
		}	
	}

	protected function getController(){
		if(class_exists($this->controllerPath)){
			$this->controller= new $this->controllerPath;
		}else{
			die($this->currentController . ' Does not exist.');
		}
	}
}