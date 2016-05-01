<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\structure;

interface StoreInterface {

    /**
     * Indicates if store is active
     * @return boolean
     */
    public function isActive();

    /**
     * Indicates if it is default store
     * @return boolean
     */
    public function isDefault();
}