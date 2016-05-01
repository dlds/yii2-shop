<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\catalog\product;

use dlds\shoppable\interfaces\structure\StoreInterface;

interface PriceInterface {

    /**
     * Retrieves retail amount
     * @param boolean $tax indicates if tax will be included
     * @param StoreInterface $store defines from which store data will be loaded
     * @return float
     */
    public function getRetailAmount($tax = true, StoreInterface $store = null);

    /**
     * Retrieves wholesale amount
     * @param boolean $tax indicates if tax will be included
     * @param StoreInterface $store defines from which store data will be loaded
     * @return float
     */
    public function getWholesaleAmount($tax = true, StoreInterface $store = null);
}