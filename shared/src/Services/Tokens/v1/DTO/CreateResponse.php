<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/tokens/v1/message.proto

namespace Spiral\Shared\Services\Tokens\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.tokens.v1.dto.CreateResponse</code>
 */
class CreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.tokens.v1.dto.Token token = 1;</code>
     */
    protected $token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Spiral\Shared\Services\Tokens\v1\DTO\Token $token
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Tokens\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.tokens.v1.dto.Token token = 1;</code>
     * @return \Spiral\Shared\Services\Tokens\v1\DTO\Token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>.api.tokens.v1.dto.Token token = 1;</code>
     * @param \Spiral\Shared\Services\Tokens\v1\DTO\Token $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkMessage($var, \Spiral\Shared\Services\Tokens\v1\DTO\Token::class);
        $this->token = $var;

        return $this;
    }

}

