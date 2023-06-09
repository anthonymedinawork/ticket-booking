<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/common/v1/message.proto

namespace Spiral\Shared\Services\Common\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.common.v1.dto.Pagination</code>
 */
class Pagination extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 2;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>int32 current_page = 3;</code>
     */
    protected $current_page = 0;
    /**
     * Generated from protobuf field <code>int32 per_page = 4;</code>
     */
    protected $per_page = 0;
    /**
     * Generated from protobuf field <code>int32 last_page = 5;</code>
     */
    protected $last_page = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type int $current_page
     *     @type int $per_page
     *     @type int $last_page
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Common\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 total = 2;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int32 total = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 current_page = 3;</code>
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->current_page;
    }

    /**
     * Generated from protobuf field <code>int32 current_page = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->current_page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 per_page = 4;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Generated from protobuf field <code>int32 per_page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->per_page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 last_page = 5;</code>
     * @return int
     */
    public function getLastPage()
    {
        return $this->last_page;
    }

    /**
     * Generated from protobuf field <code>int32 last_page = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLastPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->last_page = $var;

        return $this;
    }

}

