<?php

namespace Clvarley\LibrarySkeleton\Tests;

use PHPUnit\Framework\TestCase;
use Clvarley\LibrarySkeleton\Example;

/**
 * An example of a unit test using PHPUnit
 * 
 * Classes here should also use the namespace you chose earlier, but appended
 * with '\Tests'.
 * 
 * @see https://docs.phpunit.de/en/9.6/
 */
final class ExampleTest extends TestCase
{
    private Example $example;

    public function setUp(): void
    {
        $this->example = new Example();
    }

    /**
     * @covers Example::hello
     */
    public function testCanSayHello(): void
    {
        $result = $this->example->hello();

        $this->assertSame('hello world', $result);
    }
}
