<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/common/v1/message.proto

namespace Spiral\Shared\Services\Common\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.common.v1.dto.Money</code>
 */
class Money extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     */
    protected $currency = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $amount
     *     @type string $currency
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Common\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

}

