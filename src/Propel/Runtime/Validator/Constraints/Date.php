<?php

/**
 * MIT License. This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Propel\Runtime\Validator\Constraints;

use Symfony\Component\Validator\Constraints\Date as SymfonyDateConstraint;

if ((new \ReflectionProperty(SymfonyDateConstraint::class, 'message'))->hasType()) {
  class Date extends SymfonyDateConstraint
  {
    /** @phpstan-ignore-next-line only compatible with symfony 7 */
    public string $message = 'This value is not a valid date.'; // @phpstan-ignore-line

    public string $column = '';
  }
} else {
  class Date extends SymfonyDateConstraint
  {
    /**
     * @var string
     */
    public $message = 'This value is not a valid date.';

    /**
     * @var string
     */
    public $column = '';
  }
}

