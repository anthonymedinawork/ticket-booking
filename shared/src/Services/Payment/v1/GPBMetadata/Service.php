<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/payment/v1/service.proto

namespace Spiral\Shared\Services\Payment\v1\GPBMetadata;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Spiral\Shared\Services\Payment\v1\GPBMetadata\Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af1010a1c6170692f7061796d656e742f76312f736572766963652e70726f746f120e6170692e7061796d656e742e763132630a0e5061796d656e745365727669636512510a0643686172676512212e6170692e7061796d656e742e76312e64746f2e436861726765526571756573741a222e6170692e7061796d656e742e76312e64746f2e436861726765526573706f6e736522004254ca022153706972616c5c5368617265645c53657276696365735c5061796d656e745c7631e2022d53706972616c5c5368617265645c53657276696365735c5061796d656e745c76315c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

