<?php 
namespace Test\Models;

use Phalcon\Mvc\Model;

/**
 * @Entity @Table(name="companies")
 */


class Companies extends Model
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

	 public function getName()
	 {
	 	return $this->name;
	 }

	 public function getId(){

	 	return $this->id;
	 }

}

