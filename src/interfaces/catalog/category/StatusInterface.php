<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\catalog\category;

use dlds\shoppable\interfaces\structure\StoreInterface;

interface StatusInterface {

    /**
     * Indicates if is in active mode
     * @param StoreInterface $store defines from which store data will be loaded
     * @return boolean
     */
    public function inActiveMode(StoreInterface $store = null);
}