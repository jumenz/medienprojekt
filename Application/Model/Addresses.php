<?php
/**
 * Author: julia
 * Date: 18.03.13
 */

require_once('../Local.php');
require_once('Db.php');

class Application_Model_Addresses
{
    /**
     * @var Application_Model_Db
     */
    protected $resourceModel;
    /**
     * @var array
     */
    protected $list_data;
    /**
     * @var array
     */
    protected $address_data;
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $prefix;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $prename;
    /**
     * @var string
     */
    protected $date_birth;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var integer
     */
    protected $nr;
    /**
     * @var string
     */
    protected $zipcode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $mail;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $mobile;


    /**
     * Constructor
     */
    public function __construct() {
        $this->resourceModel = new Application_Model_Db(MYSQL_ADDRESSES_TABLE);
    }

    /**
     * Sets all protected Data
     *
     * @param $valueArray
     * @return Application_Model_Addresses
     */
    public function setData($valueArray) {
        foreach ($valueArray as $key => $value){
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * Changes the Dates into database format
     *
     * @return Application_Model_Addresses
     */
    public function changeDate2MySql()
    {
        if ($this->date_birth != '')
        {
            $this->date_birth = $this->resourceModel->dateGerman2MySql($this->getDateBirth());
        }
        return $this;
    }

    /**
     * Changes a Date into german format
     *
     * @param $date
     * @return string
     */
    public function changeDate2German($date)
    {
        return $this->resourceModel->dateMySql2German($date);
    }

    /**
     * Returns an Array with all protected Data
     *
     * @return array
     */
    public function getData() {
        $valueArray = array(
            'prefix' => ucfirst($this->getPrefix()),
            'name' => ucfirst($this->getName()),
            'prename' => ucfirst($this->getPrename()),
            'date_birth' => changeDate2German($this->getDateBirth()),
            'street' => ucfirst($this->getStreet()),
            'nr' => $this->getNr(),
            'zipcode' => $this->getZipcode(),
            'city' => ucfirst($this->getCity()),
            'mail' => $this->getMail(),
            'mobile' => $this->getMobile(),
            'phone' => $this->getPhone()
        );
        return $valueArray;
    }

    /**
     * Sets address ID
     *
     * @param int $id
     * @return Application_Model_Addresses
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Returns address ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets prefix
     *
     * @param string $prefix
     * @return Application_Model_Addresses
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Returns prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode
     * @return Application_Model_Addresses
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * Returns zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Sets Date of Birth
     *
     * @param $date_birth string
     * @return Application_Model_Addresses
     */
    public function setDateBirth($date_birth)
    {
        $this->date_birth = $date_birth;
        return $this;
    }

    /**
     * Returns Date of Birth
     *
     * @return string
     */
    public function getDateBirth()
    {
        return $this->date_birth;
    }

    /**
     * Sets address
     */

    /**
     * Sets street
     *
     * @param $street
     * @return Application_Model_Addresses
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Sets street number
     *
     * @param $nr
     * @return Application_Model_Addresses
     */
    public function setNr($nr)
    {
        $this->nr = $nr;
        return $this;
    }

    /**
     * Sets postal code
     *
     * @param $postal_code
     * @return Application_Model_Addresses
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * Sets city
     *
     * @param $city
     * @return Application_Model_Addresses
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Returns address
     */

    /**
     * Returns street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Returns street number
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Returns city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns postal code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Sets e-mail
     *
     * @param $mail
     * @return Application_Model_Addresses
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * Returns e-mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets name
     *
     * @param $name
     * @return Application_Model_Addresses
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Returns name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets phone number
     *
     * @param $phone
     * @return Application_Model_Addresses
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Returns phone number
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets prename
     *
     * @param $prename
     * @return Application_Model_Addresses
     */
    public function setPrename($prename)
    {
        $this->prename = $prename;
        return $this;
    }

    /**
     * Returns prename
     *
     * @return string
     */
    public function getPrename()
    {
        return $this->prename;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return Application_Model_Addresses
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Returns mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Saves address information
     */
    public function save()
    {
        $this->resourceModel->insert($this->getData());
    }

    /**
     * Deletes address
     */
    public function deleteAdress($id, $name, $prename)
    {
        $this->resourceModel->deleteAddress($id, $name, $prename);
    }

    /**
     * Updates address
     */
    public function update($data)
    {
        $this->resourceModel->update($data);
    }

    /**
     * Validates address information
     */
    public function validate()
    {

    }

    /**
     * Sends mail to person
     */
    public function contact()
    {

    }

    /**
     * Print address information
     */
    public function printDocument()
    {

    }

    /**
     * Sets array with data from database
     *
     * @return Application_Model_Addresses
     */
    public function setListData()
    {
        $this->list_data = $this->resourceModel->getDatabaseData();
        return $this;
    }

    /**
     * Sorts the array with data from database by parameter
     *
     * @param $sort
     */
    public function sortListData($sort)
    {
        if (isset($this->list_data))
        {
            foreach ($this->list_data as $key => $value) {
                $id[$key] = $value['id'];
                $name[$key] = $value['name'];
                $prename[$key] = $value['prename'];
            }
            switch ($sort)
            {
                case 'id':
                    array_multisort($id, SORT_ASC, $this->list_data);
                    break;
                case 'name':
                    array_multisort($name, SORT_ASC, $prename, SORT_ASC, $this->list_data);
                    break;
                case 'prename':
                    array_multisort($prename, SORT_ASC, $this->list_data);
                    break;
            }
        }
    }

    /**
     * Returns array with all data from database
     *
     * @return array
     */
    public function getListData()
    {
        return $this->list_data;
    }

    /**
     * Sets array with address data from database
     *
     * @param $id
     * @param $name
     * @param $prename
     * @return mixed
     */
    public function setAddressData($id, $name, $prename)
    {
        $this->address_data = $this->resourceModel->getAddressData($id, $name, $prename);
        return $this;
    }

    /**
     * Returns array with address data from database
     *
     * @return array
     */
    public function getAddressData()
    {
        return $this->address_data;
    }

}
