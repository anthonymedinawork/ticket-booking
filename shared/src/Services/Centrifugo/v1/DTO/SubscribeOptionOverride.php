<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/centrifugo/v1/message.proto

namespace Spiral\Shared\Services\Centrifugo\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.centrifugo.v1.dto.SubscribeOptionOverride</code>
 */
class SubscribeOptionOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue presence = 1;</code>
     */
    protected $presence = null;
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue join_leave = 2;</code>
     */
    protected $join_leave = null;
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_recovery = 3;</code>
     */
    protected $force_recovery = null;
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_positioning = 4;</code>
     */
    protected $force_positioning = null;
    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_push_join_leave = 5;</code>
     */
    protected $force_push_join_leave = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $presence
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $join_leave
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $force_recovery
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $force_positioning
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $force_push_join_leave
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Centrifugo\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue presence = 1;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue presence = 1;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $var
     * @return $this
     */
    public function setPresence($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue::class);
        $this->presence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue join_leave = 2;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue
     */
    public function getJoinLeave()
    {
        return $this->join_leave;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue join_leave = 2;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $var
     * @return $this
     */
    public function setJoinLeave($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue::class);
        $this->join_leave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_recovery = 3;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue
     */
    public function getForceRecovery()
    {
        return $this->force_recovery;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_recovery = 3;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $var
     * @return $this
     */
    public function setForceRecovery($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue::class);
        $this->force_recovery = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_positioning = 4;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue
     */
    public function getForcePositioning()
    {
        return $this->force_positioning;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_positioning = 4;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $var
     * @return $this
     */
    public function setForcePositioning($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue::class);
        $this->force_positioning = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_push_join_leave = 5;</code>
     * @return \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue
     */
    public function getForcePushJoinLeave()
    {
        return $this->force_push_join_leave;
    }

    /**
     * Generated from protobuf field <code>.api.centrifugo.v1.dto.BoolValue force_push_join_leave = 5;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue $var
     * @return $this
     */
    public function setForcePushJoinLeave($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Centrifugo\v1\DTO\BoolValue::class);
        $this->force_push_join_leave = $var;

        return $this;
    }

}

