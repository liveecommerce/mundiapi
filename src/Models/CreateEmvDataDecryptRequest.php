<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateEmvDataDecryptRequest implements JsonSerializable
{
    /**
     * Emv Decrypt cipher type
     * @required
     * @var string $cipher public property
     */
    public $cipher;

    /**
     * Dukpt data request
     * @var \MundiAPILib\Models\CreateEmvDataDukptDecryptRequest|null $dukpt public property
     */
    public $dukpt;

    /**
     * Encrypted tags list
     * @required
     * @var \MundiAPILib\Models\CreateEmvDataTlvDecryptRequest[] $tags public property
     */
    public $tags;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                           $cipher Initialization value for $this->cipher
     * @param CreateEmvDataDukptDecryptRequest $dukpt  Initialization value for $this->dukpt
     * @param array                            $tags   Initialization value for $this->tags
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->cipher = func_get_arg(0);
            $this->dukpt  = func_get_arg(1);
            $this->tags   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['cipher'] = $this->cipher;
        $json['dukpt']  = $this->dukpt;
        $json['tags']   = $this->tags;

        return $json;
    }
}
