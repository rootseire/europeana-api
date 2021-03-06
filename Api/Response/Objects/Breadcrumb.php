<?php
/**
 * @version 0.0.1
 * @created 2013-03-02 04:19 gmt +1
 * @author dan entous <contact@gmtplusone.com>
 * @copyright © 2013 dan entous
 * @license GNU General Public Licence 3.0 http://www.gnu.org/licenses/gpl.html
 */
namespace Europeana\Api\Response\Objects;
use Europeana\Api\Response\ResponseObjectAbstract;


/**
 * the list of search elements (query and qf parameters) (available in case of breadrumb and portal profile applications). It is an array, and each breadcrumb contains the following fields:
 */
class Breadcrumb extends ResponseObjectAbstract {


	/**
	 * @var string
	 * a label of the item
	 */
	public $display;


	/**
	 * @var string
	 * an URL fragment of query parameter (in the form of param + "=" + value), which can be reused in search call
	 */
	public $href;


	/**
	 * @var boolean
	 * a boolean value means whether the current is the last breadcrumb or not
	 */
	public $last;


	/**
	 * @var string
	 * the query parameter name
	 */
	public $param;


	/**
	 * @var string
	 * the query parameter's value
	 */
	public $value;


	public function reset() {

		parent::reset();

		$this->display = null;
		$this->href = null;
		$this->last = false;
		$this->param = null;
		$this->value = null;

	}


	public function __construct( array $properties ) {

		$this->reset();
		$this->populate( $properties );

	}


}