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
 * @name WirecardCEE_QMore_Return_Success
 * @category WirecardCEE
 * @package WirecardCEE_QMore
 * @subpackage Return
 * @version 3.1.0
 */
class WirecardCEE_QMore_Return_Success extends WirecardCEE_Stdlib_Return_Success {
    public function __construct($returnData, $secret) {
        parent::__construct($returnData, $secret, WirecardCEE_Stdlib_Fingerprint::HASH_ALGORITHM_SHA512);
    }

}