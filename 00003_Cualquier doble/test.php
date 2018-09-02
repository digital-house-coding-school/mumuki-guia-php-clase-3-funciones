public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("dobles"), "No existe la función dobles");
  
  $fct = new ReflectionFunction('client_func');
  $fct = $fct->getNumberOfRequiredParameters();
  
  var_dump($fct);exit;

}