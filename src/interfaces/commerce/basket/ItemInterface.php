<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\commerce\basket;

interface ItemInterface {

    /**
     * Retrieves item title which will be displayed across all basket pages
     * @return string
     */
    public function getBasketItemTitle();

    /**
     * Retrieves item description which will be displayed across all basket pages
     * @return string
     */
    public function getBasketItemDescription();

    /**
     * Retrieves item availability which will be displayed across all basket pages
     * @param boolen indicates availability will be retrieved as formatted string or system value
     * @return mixed
     */
    public function getBasketItemAvailability($formatted = false);

    /**
     * Retrieves basket item due amount
     * @param boolen indicates if tax will be included
     */
    public function getBasketItemDueAmount($tax = true);
}