<?php

class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function app(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->app(), true);
	}
	
}

?>