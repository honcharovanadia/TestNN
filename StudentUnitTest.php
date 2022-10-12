<?php
	require "Student.php";
	use PHPUnit\Framework\TestCase;
	
	class SudentClassTest extends TestCase{
		private $name="Kola";
		private $surname="Clark";
		private $group=200;
		private $StudentTestInstance;
		
		protected function setUp():void{
			$this->StudentTestInstance=new Student();
		}
		
		public function testGroup(){
			$this->StudentTestInstance->set_group($this->group);
			$this->assertEquals($this->group, $this->StudentTestInstance->get_group());
			
		}
		
		public function testSName(){
			$this->StudentTestInstance->set_surname($this->surname);
			$this->assertEquals($this->surname, $this->StudentTestInstance->get_surname());
			
		}
	}
?>