<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\catalog;

use dlds\shoppable\interfaces\core\LanguageInterface;
use dlds\shoppable\interfaces\structure\StoreInterface;

interface ProductInterface {

    /**
     * Retrieves catalog product type
     * @return int
     */
    public function getType();

    /**
     * Retrieves catalog product stock keeping unit
     * @return string
     */
    public function getSku();

    /**
     * Retrieves catalog product title
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getTitle(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog product perex
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getPerex(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog product content
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getContent(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog product product\PriceInterface object
     * @param StoreInterface $store defines from which store it will be loaded
     * @return product\PriceInterface
     */
    public function getPrice(StoreInterface $store = null);

    /**
     * Retrieves catalog product product\StatusInterface object
     * @param StoreInterface $store defines from which store it will be loaded
     * @return product\StatusInterface
     */
    public function getStatus(StoreInterface $store = null);

    /**
     * Retrieves all baskets contains this product
     * @param StoreInterface $store defines from which store it will be loaded
     * @return array
     */
    public function getAssignedBaskets(StoreInterface $store = null);
}