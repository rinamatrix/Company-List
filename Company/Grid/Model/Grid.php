<?php

/**
 * Grid Grid Model.
 * @category  Company
 * @package   Company_Grid
 * @author    Company
 * @copyright Copyright (c) 2010-2017 Company Software Private Limited (https://Company.com)
 * @license   https://store.Company.com/license.html
 */
namespace Company\Grid\Model;

use Company\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'company_grid_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'company_grid_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'company_grid_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Company\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title.
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
   //
    public function getCompanySiteUrl()
    {
        return $this->getData(self::COMPANYSITEURL);
    }
    public function setCompanySiteUrl($companysiteUrl)
    {
        return $this->setData(self::COMPANYSITEURL, $companysiteUrl);
    }

    //

    public function getSalesPersonFirstName()
    {
        return $this->getData(self::SALESPERSONFIRSTNAME);
    }
    public function setSalesPersonFirstName($salespersonfirstName)
    {
        return $this->setData(self::SALESPERSONFIRSTNAME, $salespersonfirstName);
    }

    public function getSalesPersonMiddleName()
    {
        return $this->getData(self::SALESPERSONMIDDLENAME);
    }
    public function setSalesPersonMiddleName($salespersonmiddleName)
    {
        return $this->setData(self::SALESPERSONMIDDLENAME, $salespersonmiddleName);
    }



    public function getSalesPersonLastName()
    {
        return $this->getData(self::SALESPERSONLASTNAME);
    }
    public function setSalesPersonLastName($salespersonlastName)
    {
        return $this->setData(self::SALESPERSONLASTNAME, $salespersonlastName);
    }//nmmn

    public function getSalepersonMailId()
    {
        return $this->getData(self::SALESPERSONMAILID);
    }
    public function setSalepersonMailId($salesPersonMailid)
    {
        return $this->setData(self::SALESPERSONMAILID, $salesPersonMailid);
    }
    ////

    public function getSalepersonContactnum()
    {
        return $this->getData(self::SALESPERSONCONTACTNUM);
    }
    public function setSalepersonContactnum($salesPersonContactnumber)
    {
        return $this->setData(self::SALESPERSONCONTACTNUM, $salesPersonContactnumber);
    }


    public function getCompanyAddress1()
    {
        return $this->getData(self::COMPANYADDRESS1);
    }

    public function setCompanyAddress1($companyAddress1)
    {
        return $this->setData(self::COMPANYADDRESS1, $companyAddress1);
    }




    public function getCompanyAddress2()
    {
        return $this->getData(self::COMPANYADDRESS2);
    }
    public function setCompanyAddress2($companyAddress2)
    {
        return $this->setData(self::COMPANYADDRESS2, $companyAddress2);
    }




    public function getCompanyCity()
    {
        return $this->getData(self::COMPANYCITY);
    }
    public function setCompanyCity($companyCity)
    {
        return $this->setData(self::COMPANYCITY, $companyCity);
    }




    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }
    public function setCountry($companyCountry)
    {
        return $this->setData(self::COUNTRY, $companyCountry);
    }



    public function getStatename()
    {
        return $this->getData(self::STATENAME);
    }
    public function setStatename($statename)
    {
        return $this->setData(self::STATENAME, $statename);
    }


    public function getState()
    {
        return $this->getData(self::STATE);
    }
    public function setState($state)
    {
        return $this->setData(self::STATE, $state);
    }



    public function getCompanyPincode()
    {
        return $this->getData(self::COMPANYPINCODE);
    }
    public function setCompanyPincode($companyPincode)
    {
        return $this->setData(self::COMPANYPINCODE, $companyPincode);
    }
   
    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getPublishDate()
    {
        return $this->getData(self::PUBLISH_DATE);
    }

    /**
     * Set PublishDate.
     */
    public function setPublishDate($publishDate)
    {
        return $this->setData(self::PUBLISH_DATE, $publishDate);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    //
    public function getGSTNNO()
    {
        return $this->getData(self::GSTNNO);
    }
    public function setGSTNNO($gstnNo)
    {
        return $this->setData(self::GSTNNO, $gstnNo);
    }
    //


    public function getPANNO()
    {
        return $this->getData(self::PANNO);
    }
    public function setPANNO($panNo)
    {
        return $this->setData(self::PANNO, $panNo);
    }


    public function getPHONENO()
    {
        return $this->getData(self::PHONENO);
    }
    public function setPHONENO($phoneNo)
    {
        return $this->setData(self::PHONENO, $phoneNo);
    }


    public function getFAXNO()
    {
        return $this->getData(self::FAXNO);
    }
    public function setFAXNO($faxNo)
    {
        return $this->setData(self::FAXNO, $faxNo);
    }

    public function getCUSTOMERTYPE()
    {
        return $this->getData(self::CUSTOMERTYPE);
    }
    public function setCUSTOMERTYPE($customerType)
    {
        return $this->setData(self::CUSTOMERTYPE, $customerType);
    }


    public function getCUSTOMERTAX()
    {
        return $this->getData(self::CUSTOMERTAX);
    }
    public function setCUSTOMERTAX($customerTax)
    {
        return $this->setData(self::CUSTOMERTAX, $customerTax);
    }


    public function getCITY()
    {
        return $this->getData(self::CITY);
    }
  
    public function setCITY($city)
    {
        return $this->setData(self::CITY, $city);
    }


}
