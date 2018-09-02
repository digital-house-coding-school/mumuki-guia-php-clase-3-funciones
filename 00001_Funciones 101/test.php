public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("unoAlDiez"), "La función unoAlDiez no existe");
  
  $resul = unoAlDiez();
  
  $this->assertTrue(is_array($resul), "La función debe retornar un array");
}