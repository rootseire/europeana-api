<?php
/**
 * @version 0.0.1
 * @created 2013-03-01 07:29 gmt +1
 * @author dan entous <contact@gmtplusone.com>
 * @copyright © 2013 dan entous
 * @license GNU General Public Licence 3.0 http://www.gnu.org/licenses/gpl.html
 */
namespace	Europeana\Api\Response;


interface ResponseInterface {


	public function getRequestUrl();
	public function reset();
	public function __get( $property );
	public function __construct( array $response );


}