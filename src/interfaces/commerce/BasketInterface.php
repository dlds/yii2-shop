<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\commerce;

use dlds\shoppable\interfaces\catalog\ProductInterface;
use dlds\shoppable\interfaces\commerce\ItemInterfaceInterface;

interface BasketInterface {

    /**
     * Adds given ItemInterface quantity to current customer Basket
     * @param \dlds\shoppable\interfaces\commerce\ItemInterface $item
     * @param int $qty defines item quantity which will be added
     * @return boolean
     */
    public function addItem(ItemInterface $item, $qty = 1);

    /**
     * Subtracts given ItemInterface quantity from current customer Basket
     * @param \dlds\shoppable\interfaces\commerce\ItemInterface $item
     * @param int $qty defines item quantity which will be subtracted
     * @return boolean
     */
    public function subtractItem(ItemInterface $item, $qty = 1);

    /**
     * Removes given ItemInterface completely from current customer Basket
     * @param \dlds\shoppable\interfaces\commerce\ItemInterface $item
     * @return boolean
     */
    public function removeItem(ItemInterface $item);

    /**
     * Retrieves array of all ItemInterface in customer Basket
     * @return array
     */
    public function getItems();

    /**
     * Replaces all customer items in basket with given array of new items
     * @return boolean
     */
    public function setItems(array $items);

    /**
     * Adds given ProductInterface quantity to current customer Basket
     * @param ProductInterface $product
     * @param int $qty defines product quantity which will be added
     * @return boolean
     */
    public function addProduct(ProductInterface $product, $qty = 1);

    /**
     * Subtracts given ProductInterface quantity from current customer Basket
     * @param ProductInterface $product
     * @param int $qty defines product quantity which will be subtracted
     * @return boolean
     */
    public function subtractProduct(ProductInterface $product, $qty = 1);

    /**
     * Removes given ProductInterface completely from current customer Basket
     * @param ProductInterface $product
     * @return boolean
     */
    public function removeProduct(ProductInterface $product);

    /**
     * Retrieves array of all ProductInterface in customer Basket
     * @return array
     */
    public function getProducts();

    /**
     * Replaces all customer products in basket with given array of new products
     * @return boolean
     */
    public function setProducts(array $products);

    /**
     * Retrieves total due amount which will be charged to the customer.
     * This is the final price which will be placed on order and invoice.
     * - all basket rules are included (delivery, discounts, ...)
     * @param boolean $tax indicates if tax will be included or not
     * @return float
     */
    public function getTotalDue($tax = true);
}