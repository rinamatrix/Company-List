<?php
/**
 * Grid GridInterface.
 * @category  Company
 * @package   Company_Grid
 * @author    Company
 * @copyright Copyright (c) 2010-2017 Company Software Private Limited (https://Company.com)
 * @license   https://store.Company.com/license.html
 */

namespace Company\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const TITLE = 'company_name';
    const COMPANYSITEURL = 'companysite_url';
    const SALESPERSONFIRSTNAME = 'sales_person_firstname';
    const SALESPERSONMIDDLENAME = 'sales_person_middlename';
    const SALESPERSONLASTNAME = 'sales_person_lastname';
    const SALESPERSONMAILID = 'sales_person_mailid';
    const SALESPERSONCONTACTNUM = 'sales_person_contactnumber';
    const COMPANYADDRESS1 = 'company_address1';
    const COMPANYADDRESS2 = 'company_address2';
    const COMPANYCITY = 'company_city';
    const COUNTRY = 'country';
    const STATENAME = 'statename';
    const STATE = 'state';
    const COMPANYPINCODE = 'company_pincode';
    const CITY = 'city';

    
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';
    const GSTNNO = 'gstn';
    const PANNO = 'pan';
    const PHONENO = 'phoneno';
    const FAXNO = 'fax';
    const CUSTOMERTYPE = 'customertype';
    const CUSTOMERTAX = 'customer_tax';

   
    public function getEntityId();

   
    public function setEntityId($entityId);

   
    public function getTitle();

   
    public function setTitle($title);


    public function getCompanySiteUrl();

  
    public function setCompanySiteUrl($companysiteUrl);


    public function getSalesPersonFirstName();
  
    public function setSalesPersonFirstName($salespersonfirstName);



    public function getSalesPersonMiddleName();
  
    public function setSalesPersonMiddleName($salespersonmiddleName);



    public function getSalesPersonLastName();
  
    public function setSalesPersonLastName($salespersonlastName);
    //

   
    public function getSalepersonMailId();
   
    public function setSalepersonMailId($salesPersonMailid);
    //

    public function getSalepersonContactnum();
   
    public function setSalepersonContactnum($salesPersonContactnumber);



    public function getCompanyAddress1();
   
    public function setCompanyAddress1($companyAddress1);



    public function getCompanyAddress2();
   
    public function setCompanyAddress2($companyAddress2);


    public function getCompanyCity();   
    public function setCompanyCity($companyCity);


    public function getCountry();   
    public function setCountry($companyCountry);


    public function getStatename();   
    public function setStatename($statename);


    public function getState();   
    public function setState($state);

    public function getCompanyPincode();   
    public function setCompanyPincode($companyPincode);

   
    public function getIsActive();

   
    public function setIsActive($isActive);

   
    public function getUpdateTime();

   
    public function setUpdateTime($updateTime);

  
    public function getCreatedAt();

  
    public function setCreatedAt($createdAt);


    public function getGSTNNO();
  
    public function setGSTNNO($gstnNo);


    public function getPANNO();
  
    public function setPANNO($panNo);


    public function getPHONENO();
  
    public function setPHONENO($phoneNo);


    public function getFAXNO();
  
    public function setFAXNO($faxNo);


    public function getCUSTOMERTYPE();
  
    public function setCUSTOMERTYPE($customerType);


    public function getCUSTOMERTAX();
  
    public function setCUSTOMERTAX($customerTax);


    public function getCITY();
  
    public function setCITY($city);
}
