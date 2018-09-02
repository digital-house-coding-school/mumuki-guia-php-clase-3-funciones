public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("nombreCompleto"), "No existe la función nombreCompleto");
  
  $fct = new ReflectionFunction('nombreCompleto');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 2, "La función debe recibir dos argumentos");
  
  $res = nombreCompleto("Jon", "Snow");
  $this->assertTrue($res === "Jon Snow", "Dado el nombre Jon Snow la función retorna '$res'");
  
  $res = nombreCompleto("Arya", "Stark");
  $this->assertTrue($res === "Arya Stark", "Dado el nombre Arya Stark la función retorna '$res'");
}