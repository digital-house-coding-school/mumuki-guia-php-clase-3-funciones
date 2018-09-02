public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("dobles"), "No existe la función dobles");
  
  $fct = new ReflectionFunction('dobles');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 1, "La función debe recibir un argumento");
  
  $arr = [1,5,10];
  $res = dobles($arr);
  
  $this->assertTrue(is_array($res), "La función 'dobles' debe retornar un array como resultado");
  
  $this->assertTrue(count($res) == count($arr), "La función 'dobles' debe devolver tantos elementos como los que recibe");
  
  $i = 0;
  $exito = true;
  foreach ($res as $r) {
    $exito = $exito && $r == $arr[$i] * 2;
  }
  
  $this->assertTrue($exito, "La función no esta retornando los dobles");

}