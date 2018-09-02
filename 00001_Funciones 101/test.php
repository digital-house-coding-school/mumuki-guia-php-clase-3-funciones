public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("unoAlDiez"), "La función unoAlDiez no existe");
  
  $resul = unoAlDiez();
  
  $this->assertTrue(is_array($resul), "La función debe retornar un array");
  
  $this->assertTrue(count($resul) == 10, "El array de retorno debe tener 10 elementos");
  
  $exito = true;
  $i = 1;
  foreach ($resul as $r) {
    $exito = $exito && $r == $i;
    $i++;
  }
  
  $this->assertTrue($exito, "¿Estás seguro que estas devolviendo los números del 1 al 10?");
}