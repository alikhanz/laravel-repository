<?php
/**
 * @author Zakirov Alikhan <alihan93.93@gmail.com>
 */

namespace LaravelThings\Repository\Contracts;

interface ModelContract
{
    /**
     * Get model unique key.
     *
     * @return string|int|null
     */
    public function getKey();
}