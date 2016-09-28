<?php
/**
 * Created by IntelliJ IDEA.
 * User: munzli
 * Date: 9/20/16
 * Time: 2:47 PM
 */

namespace Ibrows\PostBarcodeBundle\Model;

/**
 * Interface for the Address
 */
interface AddressInterface
{
    const MISS = 'Frau';
    const MISTER = 'Herr';

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @return string
     */
    public function getCompany();

    /**
     * @return string
     */
    public function getZipCode();

    /**
     * @return string
     */
    public function getPrimaryStreet();

    /**
     * @return string
     */
    public function getSecondaryStreet();

    /**
     * @return string
     */
    public function getCity();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getTitle();
}