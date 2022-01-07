<?php
/**
 * Grid Logger Handler.
 * @category  Company
 * @package   Company_Grid
 * @author    Company
 * @copyright Copyright (c) 2010-2017 Company Software Private Limited (https://Company.com)
 * @license   https://store.Company.com/license.html
 */

namespace Company\Grid\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level.
     *
     * @var int
     */
    public $loggerType = Logger::INFO;

    /**
     * File name.
     *
     * @var string
     */
    public $fileName = '/var/log/grid.log';
}
