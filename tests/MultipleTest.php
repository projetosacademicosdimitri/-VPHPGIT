<?php
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
    public function testShouldReturnsLinio()
    {
        $this->assertEquals(Evaluation::getValue(3), "Linio");
        $this->assertEquals(Evaluation::getValue(6), "Linio");
        $this->assertEquals(Evaluation::getValue(9), "Linio");
        $this->assertEquals(Evaluation::getValue(12), "Linio");
        $this->assertEquals(Evaluation::getValue(18), "Linio");
    }

    public function testShouldReturnsIT()
    {
        $this->assertEquals(Evaluation::getValue(5), "IT");
        $this->assertEquals(Evaluation::getValue(10), "IT");
        $this->assertEquals(Evaluation::getValue(20), "IT");
        $this->assertEquals(Evaluation::getValue(25), "IT");
        $this->assertEquals(Evaluation::getValue(35), "IT");
    }

    public function testShouldReturnsLinianos()
    {
        $this->assertEquals(Evaluation::getValue(15), "Linianos");
        $this->assertEquals(Evaluation::getValue(30), "Linianos");
        $this->assertEquals(Evaluation::getValue(45), "Linianos");
        $this->assertEquals(Evaluation::getValue(60), "Linianos");
        $this->assertEquals(Evaluation::getValue(75), "Linianos");
    }

    public function testShouldReturnsTheSameNumber()
    {
        $this->assertEquals(Evaluation::getValue(2), 2);
        $this->assertEquals(Evaluation::getValue(14), 14);
        $this->assertEquals(Evaluation::getValue(22), 22);
        $this->assertEquals(Evaluation::getValue(34), 34);
        $this->assertEquals(Evaluation::getValue(62), 62);
    }
}