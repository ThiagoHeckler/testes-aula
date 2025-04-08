<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    // isEven
    public function testIsEvenComNumeroPar()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenComNumeroImpar()
    {
        $this->assertFalse(Funcoes::isEven(5));
    }

    // factorial
    public function testFactorialComNumeroPositivo()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialComZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialComNumeroNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    // isPalindrome
    public function testIsPalindromeComPalindromo()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal, Panama"));
    }

    public function testIsPalindromeComNaoPalindromo()
    {
        $this->assertFalse(Funcoes::isPalindrome("ChatGPT"));
    }

    // fahrenheitToCelsius
    public function testFahrenheitToCelsiusComValorConhecido()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    }

    public function testFahrenheitToCelsiusComValorNegativo()
    {
        $this->assertEquals(-40, Funcoes::fahrenheitToCelsius(-40));
    }

    // calculateDiscount
    public function testCalculateDiscountComValoresValidos()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountComDescontoZero()
    {
        $this->assertEquals(100, Funcoes::calculateDiscount(100, 0));
    }

    public function testCalculateDiscountComValoresNegativos()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-50, 10);
    }

    public function testCalculateDiscountComPercentualNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(50, -10);
    }
}
