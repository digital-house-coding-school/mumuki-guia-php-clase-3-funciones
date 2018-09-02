public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("unoAlDiez"), "La función unoAlDiez no existe");
  
  $resul = unoAlDiez();
  
  $this->assertTrue(is_array($resul), "La función debe retornar un array");
  
  $this->assertTrue(count($resul) == 10, "El array de retorno debe tener 10 elementos");
}