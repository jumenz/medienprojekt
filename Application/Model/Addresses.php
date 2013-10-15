<?php
/**
 * Author: julia
 * Date: 18.03.13
 */

require_once('../Local.php');
require_once('Db.php');

class Application_Model_Applicant
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
    protected $applicant_data;
    /**
     * @var string
     */
    protected $experiences;
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
    protected $mediator;
    /**
     * @var float
     */
    protected $brokerage;
    /**
     * @var string
     */
    protected $date_receipt;
    /**
     * @var string
     */
    protected $date_acknowledgement;
    /**
     * @var string
     */
    protected $date_rejection;
    /**
     * state of process
     *
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $date_interview;
    /**
     * @var string
     */
    protected $time_interview;
    /**
     * @var string
     */
    protected $language_1;
    /**
     * @var string
     */
    protected $language_2;
    /**
     * @var string
     */
    protected $language_3;
    /**
     * @var string
     */
    protected $language_4;
    /**
     * @var string
     */
    protected $level_1;
    /**
     * @var string
     */
    protected $level_2;
    /**
     * @var string
     */
    protected $level_3;
    /**
     * @var string
     */
    protected $level_4;
    /**
     * @var string
     */
    protected $qualification;
    /**
     * Positive impression
     *
     * @var string
     */
    protected $pro;
    /**
     * Negative impression
     *
     * @var string
     */
    protected $contra;
    /**
     * Target salary
     *
     * @var float
     */
    protected $salary;
    /**
     * Reason of occupational change or general reason of application
     *
     * @var string
     */
    protected $reason;
    /**
     * @var string
     */
    protected $employment;
    /**
     * @var string
     */
    protected $last_employer;
    /**
     * Possible date of joining
     *
     * @var string
     */
    protected $date_joining;
    /**
     * @var string
     */
    protected $result;
    /**
     * @var string
     */
    protected $questions;
    /**
     * ID of advertised job
     *
     * @var integer
     */
    protected $job_id;
    /**
     * Speculative application
     *
     * @var boolean
     */
    protected $proactive;
    /**
     * Save permanent
     *
     * @var boolean
     */
    protected $permanent;

    /**
     * Constructor
     */
    public function __construct() {
        $this->resourceModel = new Application_Model_Db(MYSQL_APP_TABLE);
    }

    /**
     * Sets all protected Data
     *
     * @param $valueArray
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
     */
    public function changeDate2MySql()
    {
        if ($this->date_acknowledgement !='')
        {
            $this->date_acknowledgement = $this->resourceModel->dateGerman2MySql($this->getDateAcknowledgement());
        }
        if ($this->date_birth != '')
        {
            $this->date_birth = $this->resourceModel->dateGerman2MySql($this->getDateBirth());
        }
        if ($this->date_interview != '')
        {
            $this->date_interview = $this->resourceModel->dateGerman2MySql($this->getDateInterview());
        }
        if ($this->date_joining != '')
        {
            $this->date_joining = $this->resourceModel->dateGerman2MySql($this->getDateJoining());
        }
        if ($this->date_receipt != '')
        {
            $this->date_receipt = $this->resourceModel->dateGerman2MySql($this->getDateReceipt());
        }
        if ($this->date_rejection != '')
        {
            $this->date_rejection = $this->resourceModel->dateGerman2MySql($this->getDateRejection());
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
            'brokerage' => $this->getBrokerage(),
            'city' => $this->getCity(),
            'contra' => $this->getContra(),
            'date_acknowledgement' => $this->getDateAcknowledgement(),
            'date_birth' => $this->getDateBirth(),
            'date_interview' => $this->getDateInterview(),
            'date_joining' => $this->getDateJoining(),
            'date_receipt' => $this->getDateReceipt(),
            'date_rejection' => $this->getDateRejection(),
            'employment' => $this->getEmployment(),
            'experiences' => $this->getExperiences(),
            'job_id' => $this->getJobId(),
            'language_1' => $this->getLanguage1(),
            'level_1' => $this->getLevel1(),
            'language_2' => $this->getLanguage2(),
            'level_2' => $this->getLevel2(),
            'language_3' => $this->getLanguage3(),
            'level_3' => $this->getLevel3(),
            'language_4' => $this->getLanguage4(),
            'level_4' => $this->getLevel4(),
            'last_employer' => $this->getLastEmployer(),
            'mail' => $this->getMail(),
            'mediator' => $this->getMediator(),
            'name' => $this->getName(),
            'nr' => $this->getNr(),
            'permanent' => $this->getPermanent(),
            'phone' => $this->getPhone(),
            'prefix' => $this->getPrefix(),
            'prename' => $this->getPrename(),
            'pro' => $this->getPro(),
            'proactive' => $this->getProactive(),
            'qualification' => $this->getQualification(),
            'questions' => $this->getQuestions(),
            'reason' => $this->getReason(),
            'result' => $this->getResult(),
            'salary' => $this->getSalary(),
            'state' => $this->getState(),
            'street' => $this->getStreet(),
            'time_interview' => $this->getTimeInterview(),
            'zipcode' => $this->getZipcode()
        );
        return $valueArray;
    }

    /**
     * Sets applicant ID
     *
     * @param int $id
     * @return Application_Model_Applicant
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Returns applicant ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets Job ID
     *
     * @param int $job_id
     * @return Application_Model_Applicant
     */
    public function setJobId($job_id)
    {
        $this->job_id = $job_id;
        return $this;
    }

    /**
     * Returns Job ID
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Sets if applicant may be saved permanent
     *
     * @param boolean $permanent
     * @return Application_Model_Applicant
     */
    public function setPermanent($permanent)
    {
        $this->permanent = $permanent;
        return $this;
    }

    /**
     * Returns if applicant may be saved permanent
     * @return boolean
     */
    public function getPermanent()
    {
        if(isset($this->permanent)) {
            return true;
        }
        return false;
    }

    /**
     * Sets applicants prefix
     *
     * @param string $prefix
     * @return Application_Model_Applicant
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Returns applicants prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets if application was proactive
     *
     * @param boolean $proactive
     * @return Application_Model_Applicant
     */
    public function setProactive($proactive)
    {
        $this->proactive = $proactive;
        return $this;
    }

    /**
     * Returns if application was proactive
     *
     * @return boolean
     */
    public function getProactive()
    {
        return $this->proactive;
    }

    /**
     * Sets time of the Interview
     *
     * @param string $time_interview
     * @return Application_Model_Applicant
     */
    public function setTimeInterview($time_interview)
    {
        $this->time_interview = $time_interview;
        return $this;
    }

    /**
     * Returns time of the Interview
     *
     * @return string
     */
    public function getTimeInterview()
    {
        return $this->time_interview;
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * @return Application_Model_Applicant
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
     * Sets state of application
     *
     * @param string $state
     * @return Application_Model_Applicant
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Returns state of application
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets negative impression
     *
     * @param string $contra
     * @return Application_Model_Applicant
     */
    public function setContra($contra)
    {
        $this->contra = $contra;
        return $this;
    }

    /**
     * Returns negative impression
     * @return string
     */
    public function getContra()
    {
        return $this->contra;
    }

    /**
     * Sets date of acknowledgement
     *
     * @param string $date_acknowledgement
     * @return Application_Model_Applicant
     */
    public function setDateAcknowledgement($date_acknowledgement)
    {
        $this->date_acknowledgement = $date_acknowledgement;
        return $this;
    }

    /**
     * Returns date of acknowledgement
     *
     * @return string
     */
    public function getDateAcknowledgement()
    {
        return $this->date_acknowledgement;
    }

    /**
     * Sets date of interview
     *
     * @param string $date_interview
     * @return Application_Model_Applicant
     */
    public function setDateInterview($date_interview)
    {
        $this->date_interview = $date_interview;
        return $this;
    }

    /**
     * Returns date of interview
     *
     * @return string
     */
    public function getDateInterview()
    {
        return $this->date_interview;
    }

    /**
     * Sets  possible date of joining the company
     *
     * @param string $date_joining
     * @return Application_Model_Applicant
     */
    public function setDateJoining($date_joining)
    {
        $this->date_joining = $date_joining;
        return $this;
    }

    /**
     * Returns possible date of joining the company
     *
     * @return string
     */
    public function getDateJoining()
    {
        return $this->date_joining;
    }

    /**
     * Sets date of receipt
     *
     * @param string $date_receipt
     * @return Application_Model_Applicant
     */
    public function setDateReceipt($date_receipt)
    {
        $this->date_receipt = $date_receipt;
        return $this;
    }

    /**
     * Returns date of receipt
     *
     * @return string
     */
    public function getDateReceipt()
    {
        return $this->date_receipt;
    }

    /**
     * Sets date of rejection
     *
     * @param string $date_rejection
     * @return Application_Model_Applicant
     */
    public function setDateRejection($date_rejection)
    {
        $this->date_rejection = $date_rejection;
        return $this;
    }

    /**
     * Returns date of rejection
     *
     * @return string
     */
    public function getDateRejection()
    {
        return $this->date_rejection;
    }

    /**
     * Sets job experiences
     *
     * @param string $experiences
     * @return Application_Model_Applicant
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;
        return $this;
    }

    /**
     * Return job experiences
     *
     * @return string
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Sets knowledge of first language
     *
     * @param string $language_1
     * @return Application_Model_Applicant
     */
    public function setLanguage1($language_1)
    {
        $this->language_1 = $language_1;
        return $this;
    }

    /**
     * Returns knowledge of first languages
     *
     * @return string
     */
    public function getLanguage1()
    {
        return $this->language_1;
    }

    /**
     * Sets knowledge of second language
     *
     * @param string $language_2
     * @return Application_Model_Applicant
     */
    public function setLanguage2($language_2)
    {
        $this->language_2 = $language_2;
        return $this;
    }

    /**
     * Returns knowledge of second languages
     *
     * @return string
     */
    public function getLanguage2()
    {
        return $this->language_2;
    }
    /**
     * Sets knowledge of third language
     *
     * @param string $language_3
     * @return Application_Model_Applicant
     */
    public function setLanguage3($language_3)
    {
        $this->language_3 = $language_3;
        return $this;
    }

    /**
     * Returns knowledge of third languages
     *
     * @return string
     */
    public function getLanguage3()
    {
        return $this->language_3;
    }
    /**
     * Sets knowledge of fourth language
     *
     * @param string $language_4
     * @return Application_Model_Applicant
     */
    public function setLanguage4($language_4)
    {
        $this->language_4 = $language_4;
        return $this;
    }

    /**
     * Returns knowledge of fourth languages
     *
     * @return string
     */
    public function getLanguage4()
    {
        return $this->language_4;
    }

    /**
     * Sets language level
     *
     * @param string $level_1
     * @return Application_Model_Applicant
     */
    public function setLevel1($level_1)
    {
        $this->level_1 = $level_1;
        return $this;
    }

    /**
     * Returns language level
     *
     * @return string
     */
    public function getLevel1()
    {
        return $this->level_1;
    }

    /**
     * Sets language level
     *
     * @param string $level_2
     * @return Application_Model_Applicant
     */
    public function setLevel2($level_2)
    {
        $this->level_2 = $level_2;
        return $this;
    }

    /**
     * Returns language level
     *
     * @return string
     */
    public function getLevel2()
    {
        return $this->level_2;
    }

    /**
     * Sets language level
     *
     * @param string $level_3
     * @return Application_Model_Applicant
     */
    public function setLevel3($level_3)
    {
        $this->level_3 = $level_3;
        return $this;
    }

    /**
     * Returns language level
     *
     * @return string
     */
    public function getLevel3()
    {
        return $this->level_3;
    }

    /**
     * Sets language level
     *
     * @param string $level_4
     * @return Application_Model_Applicant
     */
    public function setLevel4($level_4)
    {
        $this->level_4 = $level_4;
        return $this;
    }

    /**
     * Returns language level
     *
     * @return string
     */
    public function getLevel4()
    {
        return $this->level_4;
    }

    /**
     * Sets name of last employer
     *
     * @param string $last_employer
     * @return Application_Model_Applicant
     */
    public function setLastEmployer($last_employer)
    {
        $this->last_employer = $last_employer;
        return $this;
    }

    /**
     * Returns name of last employer
     *
     * @return string
     */
    public function getLastEmployer()
    {
        return $this->last_employer;
    }

    /**
     * Sets mediator
     *
     * @param string $mediator
     * @return Application_Model_Applicant
     */
    public function setMediator($mediator)
    {
        $this->mediator = $mediator;
        return $this;
    }

    /**
     * Returns mediator
     *
     * @return string
     */
    public function getMediator()
    {
        return $this->mediator;
    }

    /**
     * Sets positive impressions
     *
     * @param string $pro
     * @return Application_Model_Applicant
     */
    public function setPro($pro)
    {
        $this->pro = $pro;
        return $this;
    }

    /**
     * Returns positive impressions
     *
     * @return string
     */
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * Sets applicant qualification
     *
     * @param string $qualification
     * @return Application_Model_Applicant
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Returns applicant qualification
     *
     * @return string
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Sets reason of occupational change or general reason of application
     *
     * @param string $reason
     * @return Application_Model_Applicant
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     *
     * Returns reason of occupational change or general reason of application
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets if applicant is unemployed or change
     *
     * @param string $employment
     * @return Application_Model_Applicant
     */
    public function setEmployment($employment)
    {
        $this->employment = $employment;
        return $this;
    }

    /**
     * Returns if applicant is unemployed or change
     *
     * @return string
     */
    public function getEmployment()
    {
        return $this->employment;
    }


    /**
     * Sets target salary
     * @param float $salary
     * @return Application_Model_Applicant
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * Returns target salary
     *
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets brokerage
     *
     * @param float $brokerage
     * @return Application_Model_Applicant
     */
    public function setBrokerage($brokerage)
    {
        $this->brokerage = $brokerage;
        return $this;
    }

    /**
     * Returns brokerage
     *
     * @return float
     */
    public function getBrokerage()
    {
        return $this->brokerage;
    }

    /**
     * Sets open questions
     *
     * @param string $questions
     * @return Application_Model_Applicant
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
        return $this;
    }

    /**
     * Returns open questions
     *
     * @return string
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Sets Result of application
     *
     * @param string $result
     * @return Application_Model_Applicant
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Returns Result of application
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }


    /**
     * Saves applicant information
     */
    public function save()
    {
        $this->resourceModel->insert($this->getData());
    }

    /**
     * Deletes applicant
     */
    public function deleteApp($id, $name, $prename)
    {
        $this->resourceModel->deleteApp($id, $name, $prename);
    }

    /**
     * Deletes all old applicants
     */
    public function deleteAll()
    {
        $this->resourceModel->deleteAll($this->getData());
    }

    /**
     * Updates applicant
     */
    public function update($data)
    {
        $this->resourceModel->update($data);
    }

    /**
     * Validates applicant information
     */
    public function validate()
    {

    }

    /**
     * Sends mail to applicant
     */
    public function contact()
    {

    }

    /**
     * Print applicant information
     */
    public function printDocument()
    {

    }

    /**
     * Sets array with data from database
     *
     * @return Application_Model_Applicant
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
                $job[$key] = $value['job_id'];
                $state[$key] = $value['state'];
            }
            switch ($sort)
            {
                case 'id':
                    array_multisort($id, SORT_ASC, $this->list_data);
                    break;
                case 'name':
                    array_multisort($name, SORT_ASC, $prename, SORT_ASC, $this->list_data);
                    break;
                case 'job_id':
                    array_multisort($job, SORT_ASC, $this->list_data);
                    break;
                case 'state':
                    array_multisort($state, SORT_ASC, $this->list_data);
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
     * Sets array with applicant data from database
     *
     * @param $id
     * @param $name
     * @param $prename
     * @return mixed
     */
    public function setApplicantData($id, $name, $prename)
    {
        $this->applicant_data = $this->resourceModel->getAppData($id, $name, $prename);
        return $this;
    }

    /**
     * Returns array with applicant data from database
     *
     * @return array
     */
    public function getApplicantData()
    {
        return $this->applicant_data;
    }

}
