<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/centrifugo/v1/message.proto

namespace Spiral\Shared\Services\Centrifugo\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.centrifugo.v1.dto.DeleteUserStatusResponse</code>
 */
class DeleteUserStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.Error error = 1;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.DeleteUserStatusResult result = 2;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\Error $error
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\DeleteUserStatusResult $result
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Centrifugo\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.Error error = 1;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.Error error = 1;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.DeleteUserStatusResult result = 2;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\DeleteUserStatusResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.DeleteUserStatusResult result = 2;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\DeleteUserStatusResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\DeleteUserStatusResult::class);
        $this->result = $var;

        return $this;
    }

}

