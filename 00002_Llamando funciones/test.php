public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  $this->assertTrue(method_exists($this,"dobles"), "No existe la función 'dobles'");
  
  $resul = $this->dobles();
  
  $this->assertTrue(is_array($resul), "La función debe retornar un array");
  
  $this->assertTrue(count($resul) == 10, "El array de retorno debe tener 10 elementos");
  
  $exito = true;
  $i = 2;
  foreach ($resul as $r) {
    $exito = $exito && $r == $i;
    $i = $i + 2;
  }
  
  $this->assertTrue($exito, "¿Estás seguro que estas devolviendo el resultado correcto");
  
  $cantUnoAlDiez = substr_count($sol, "unoAlDiez");
  
  $this->assertTrue($cantUnoAlDiez > 1, "Se ve que no llamaste a la función 'unoAlDiez'");
}

/*...content...*/