<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2023 Sergej Rufov
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Contracts\Exceptions;

use Throwable;

/**
 * UnknownPropertyException represents an exception caused by accessing unknown object properties.
 *
 * @author Sergej Rufov <support@reagordi.com>
 * @since 1.0
 */
class UnknownPropertyException extends SystemException
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $message = '', int $code = 100, $file = '', int $line = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $file, $line, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'Unknown Property';
    }
}
