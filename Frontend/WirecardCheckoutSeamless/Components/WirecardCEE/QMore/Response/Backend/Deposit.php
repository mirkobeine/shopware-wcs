<?php
/*
* Die vorliegende Software ist Eigentum von Wirecard CEE und daher vertraulich
* zu behandeln. Jegliche Weitergabe an dritte, in welcher Form auch immer, ist
* unzulaessig.
*
* Software & Service Copyright (C) by
* Wirecard Central Eastern Europe GmbH,
* FB-Nr: FN 195599 x, http://www.wirecard.at
*/
/**
 * @name WirecardCEE_QMore_Response_Backend_Deposit
 * @category WirecardCEE
 * @package WirecardCEE_QMore
 * @subpackage Response_Backend
 * @version 3.1.0
 */
class WirecardCEE_QMore_Response_Backend_Deposit extends WirecardCEE_QMore_Response_Backend_ResponseAbstract {
	/**
	 * Payment number
	 * @staticvar string
	 * @internal
	 */
	private static $PAYMENT_NUMBER = 'paymentNumber';

	/**
	 * getter for the returned paymentNumber
	 *
	 * @return string
	 */
	public function getPaymentNumber() {
		return $this->_getField(self::$PAYMENT_NUMBER);
	}
}