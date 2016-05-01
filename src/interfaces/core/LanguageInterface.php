<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\core;

interface LanguageInterface {

    /**
     * Retrieves language title
     * @return string
     */
    public function getTitle();

    /**
     * Retrieves language code
     * @return string
     */
    public function getCode();

    /**
     * Indicates if language is in active mode
     * @return boolean
     */
    public function isActive();
}