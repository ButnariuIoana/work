<?php 
namespace Test\Models;


use Phalcon\Mvc\Model;

 /**
 * @Entity @Table(name="additional_info_games")
 
        */
 class Additional_info_games extends Model
 {

 	 /**
     * @var int
     * @Id @Column(type="integer") @GeneratedValue
     */
	 protected $id;
	 
	 /**
     * @var string
     * @info @Column(type="string") @GeneratedValue
     */

	 protected $info; 


	}