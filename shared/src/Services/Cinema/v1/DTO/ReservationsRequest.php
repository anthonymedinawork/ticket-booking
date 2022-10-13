<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/cinema/v1/message.proto

namespace Spiral\Shared\Services\Cinema\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.cinema.v1.dto.ReservationsRequest</code>
 */
class ReservationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     */
    protected $user_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $user_id
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Cinema\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int32 user_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->user_id = $var;

        return $this;
    }

}

