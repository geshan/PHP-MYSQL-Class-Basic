<?php
	class person {

		public $name;    //public by default
		public $height;
		private $pinn_number;

		function __construct($persons_name) {
			//constructor
			$this->name = $persons_name;
		}     
		
		function set_name($new_name) {     
            $this->name = $new_name;       
		}

		public function get_name() {
            return $this->name;
		}
		
		function set_pinn_number($new_pinn){
			$this->pinn_number = $new_pinn;
		}
		
		function get_pinn_number(){
			return $this->pinn_number;
		}
} 
	
?>