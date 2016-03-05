<?php
declare(strict_types = 1);

namespace MrPrompt\Silex;

/**
 * Uuid Service Provider Interface
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
interface UuidInterface
{
    /**
     * @const string
     */
    const GENERATE = 'uuid.generate';

    /**
     * Generate UUID
     *
     * @return string
     */
    public function generate(): string;
}
