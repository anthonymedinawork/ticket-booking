<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/cinema/v1/message.proto

namespace Spiral\Shared\Services\Cinema\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.cinema.v1.dto.Auditorium</code>
 */
class Auditorium extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .api.cinema.v1.dto.Seat seats = 3;</code>
     */
    private $seats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $name
     *     @type \Spiral\Shared\Services\Cinema\v1\DTO\Seat[]|\Google\Protobuf\Internal\RepeatedField $seats
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Cinema\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .api.cinema.v1.dto.Seat seats = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Generated from protobuf field <code>repeated .api.cinema.v1.dto.Seat seats = 3;</code>
     * @param \Spiral\Shared\Services\Cinema\v1\DTO\Seat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Spiral\Shared\Services\Cinema\v1\DTO\Seat::class);
        $this->seats = $arr;

        return $this;
    }

}

