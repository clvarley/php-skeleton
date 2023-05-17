<?php

namespace Clvarley\LibrarySkeleton;

/**
 * Create your classes in the correct namespaces following PSR-4 style
 * 
 * Also remember to update the autoload:psr-4 value in composer.json to match
 * your chosen namespace.
 * 
 * @see https://www.php-fig.org/psr/psr-4/
 */
final class Example
{
    public function hello(): string
    {
        return 'hello world';
    }
}
