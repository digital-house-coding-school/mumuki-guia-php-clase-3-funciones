public function testDescriptionExample(): void {
  global $contadorGlobal;
  $this->assertTrue($contadorGlobal == 0, '¿Estuviste modificando $contadorGlobal fuera de la función?');
  
  $this->assertTrue(function_exists("aumentarContador"), "No existe la función aumentarContador");
  
  aumentarContador();
  $this->assertTrue($contadorGlobal == 1, 'La función no parecería estar haciendo lo correcto');
  
  aumentarContador();
  aumentarContador();
  $this->assertTrue($contadorGlobal == 3, 'La función no parecería estar haciendo lo correcto');
}