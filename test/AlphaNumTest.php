<?php
require __DIR__ . '/../src/AlphaNum.php';

class AlphaNumTest extends PHPUnit_Framework_TestCase {
  public function testDecodeAndEncode() {
    for ($i=0;$i<1000;$i++) {
      $enc = AlphaNum::enc($i);
      $dec = AlphaNum::dec($enc);
      $this->assertEquals($i, $dec);
      $this->assertEquals(AlphaNum::enc($dec), $enc);
    }
  }
}
