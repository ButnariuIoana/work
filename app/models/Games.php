<?php 
namespace Test\Models;

use Phalcon\Mvc\Model;
use Test\Controllers\ProductsController;
use Test\Models\Companies;
use Phalcon\Mvc\Dispatcher;


/**
 * @Entity @Table(name="games")
 
       */
class Games extends Model
{
	 /**
     * @var int
     * @Id @Column(type="integer") @GeneratedValue
     */
	 protected $id;
	 /**
     * @var string
     * @name @Column(type="string") @GeneratedValue
     */
	 protected $name;
	 /**
     * @var string
     * @desciption @Column(type="string") @GeneratedValue
     */
	 protected $description;
	 /**
     * @var string
     * @cost @Column(type="string") @GeneratedValue
     */
	 protected $cost;
	 /**
     * @var string
     * @age @Column(type="string") @GeneratedValue
     */
	 protected $age;

	  /**
     * @var string
     * @company @Column(type="string") @GeneratedValue
     */
	  protected $company;



    /**
     * @OneToMany(targetEntity="Additional_info_games", mappedBy="id", cascade={"ALL"})
     */
    protected $info;


    public function  getName()
    {
    	return $this->name;
    }

    public function  setName($name)
    {
    	return $this->name = $name;
    }


    public function  getDescription()
    {
    	return $this->description;
    }

    public function  setDescription($description)
    {
    	return $this->description = $description;
    }

    public function  getCost()
    {
    	return $this->cost;
    }

    public function  setCost($cost)
    {
    	return $this->cost = $cost;
    }

    public function  getAge()
    {
    	return $this->age;
    }
    public function  getId()
    {
    	return $this->id ;

    }
    public function getInfo()
    {
    	return $this->info;
    }
    public function setInfo($info)
    {
    	return $this->info = $info;
    }


    public function  getCompany()
    {

    	return $this->company;
    }

    public function  setCompany($company)
    {
    	return $this->company = $company;
    }

    public function getCompanyName(){

    	$idCompany 		= $this->getCompany();


    	// $query = $em->createQuery("SELECT name FROM companies  WHERE  id = $idCompany");
    	// $companyName = $query->getResult();
    	$companyName 	= '';

    	return $companyName;
    }
}


?>