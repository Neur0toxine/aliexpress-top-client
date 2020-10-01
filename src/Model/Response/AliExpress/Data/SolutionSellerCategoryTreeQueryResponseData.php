<?php
/**
 * PHP version 7.4
 *
 * @category SolutionSellerCategoryTreeQueryResponseData
 * @package  RetailCrm\Model\Response\AliExpress\Data
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */

namespace RetailCrm\Model\Response\AliExpress\Data;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Response\AbstractResponseData;

/**
 * Class SolutionSellerCategoryTreeQueryResponseData
 *
 * @category SolutionSellerCategoryTreeQueryResponseData
 * @package  RetailCrm\Model\Response\AliExpressSolution\Data
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class SolutionSellerCategoryTreeQueryResponseData extends AbstractResponseData
{
    /**
     * @var SolutionSellerCategoryTreeQueryResponseDataChildrenCategoryList
     *
     * @JMS\Type("RetailCrm\Model\Response\AliExpress\Data\SolutionSellerCategoryTreeQueryResponseDataChildrenCategoryList")
     * @JMS\SerializedName("children_category_list")
     */
    public $childrenCategoryList;

    /**
     * @var bool $isSuccess
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("is_success")
     */
    public $isSuccess;
}