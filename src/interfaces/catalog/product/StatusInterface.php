<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\catalog\product;

use dlds\shoppable\interfaces\structure\StoreInterface;

interface StatusInterface {

    /**
     * Indicates if is in active mode
     * - all assigned product should be able to see in catalog
     * @param StoreInterface $store defines from which store data will be loaded
     * @return boolean
     */
    public function inActiveMode(StoreInterface $store = null);

    /**
     * Indicates if is in orderable mode
     * - all assigned product should be able to order
     * @param StoreInterface $store defines from which store data will be loaded
     * @return boolean
     */
    public function inOrderableMode(StoreInterface $store = null);
}