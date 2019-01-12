<?php
namespace App\Tests;

use App\Classes\Reverter;
use PHPUnit\Framework\TestCase;

class ReverterTest extends TestCase
{
    private $reverter;

    protected function setUp()
    {
        $this->reverter = new Reverter();
    }

    protected function tearDown()
    {
        $this->reverter = null;
    }

    public function testFirst()
    {
        $result = $this->reverter->revertPunctuationMarks('Hello! How are you?');
        $this->assertEquals('Hello? How are you!', $result);
    }

    public function testEmpty()
    {
        $result = $this->reverter->revertPunctuationMarks('');
        $this->assertEquals('', $result);
    }
}
