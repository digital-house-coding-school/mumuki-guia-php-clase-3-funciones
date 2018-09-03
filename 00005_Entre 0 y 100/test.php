public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("entre0Y100"), "No existe la función entre0Y100");
  
  $fct = new ReflectionFunction('entre0Y100');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 1, "La función debe recibir un parámetro");
  
  $this->assertTrue(entre0Y100(50) == true, "La función falla para el número 50");
  $this->assertTrue(entre0Y100(0) == true, "La función falla para el número 0");
  $this->assertTrue(entre0Y100(100) == true, "La función falla para el número 100");
  
  $this->assertTrue(entre0Y100(200) == false, "La función falla para el número 200");
  $this->assertTrue(entre0Y100(101) == false, "La función falla para el número 100");
  
  
  $this->assertTrue(entre0Y100(-90) == false, "La función falla para el número -90");
  $this->assertTrue(entre0Y100(-1) == false, "La función falla para el número -1");
}