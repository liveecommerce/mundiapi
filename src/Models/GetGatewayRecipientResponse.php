<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Information about the recipient on the gateway
 */
class GetGatewayRecipientResponse implements JsonSerializable
{
    /**
     * Gateway name
     * @required
     * @var string $gateway public property
     */
    public $gateway;

    /**
     * Status of the recipient on the gateway
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Recipient id on the gateway
     * @required
     * @var string $pgid public property
     */
    public $pgid;

    /**
     * Creation date
     * @required
     * @maps created_at
     * @var string $createdAt public property
     */
    public $createdAt;

    /**
     * Last update date
     * @required
     * @maps updated_at
     * @var string $updatedAt public property
     */
    public $updatedAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $gateway   Initialization value for $this->gateway
     * @param string $status    Initialization value for $this->status
     * @param string $pgid      Initialization value for $this->pgid
     * @param string $createdAt Initialization value for $this->createdAt
     * @param string $updatedAt Initialization value for $this->updatedAt
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->gateway   = func_get_arg(0);
            $this->status    = func_get_arg(1);
            $this->pgid      = func_get_arg(2);
            $this->createdAt = func_get_arg(3);
            $this->updatedAt = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['gateway']    = $this->gateway;
        $json['status']     = $this->status;
        $json['pgid']       = $this->pgid;
        $json['created_at'] = $this->createdAt;
        $json['updated_at'] = $this->updatedAt;

        return $json;
    }
}
