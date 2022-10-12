<?php
	class Student{
		private $name;
		private $surname;
		private $group;
		
		public function set_name($name){
			$this->name=$name;
		}
		
		public function get_name(){
			return $this->name;
		}
		
		public function set_group($gr){
			$this->group=$gr;
		}
		
		public function get_group(){
			return $this->group;
		}
		
		public function set_surname($name){
			$this->surname=$name;
		}
		
		public function get_surname(){
			return $this->name;
		}
	}
?>