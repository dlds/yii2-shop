<?php
/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2016 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\shoppable\interfaces\catalog;

use dlds\shoppable\interfaces\core\LanguageInterface;
use dlds\shoppable\interfaces\structure\StoreInterface;

interface CategoryInterface {

    /**
     * Retrieves catalog category title
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getTitle(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog category perex
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getPerex(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog category content
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return string
     */
    public function getContent(StoreInterface $store = null, LanguageInterface $lang = null);

    /**
     * Retrieves catalog category category\StatusInterface object
     * @param StoreInterface $store defines from which store data will be loaded
     * @param LanguageInterface $lang defines for which language data will be loaded
     * @return category\StatusInterface
     */
    public function getStatus(StoreInterface $store = null, LanguageInterface $lang = null);
}