<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/cinema/v1/message.proto

namespace Spiral\Shared\Services\Cinema\v1\GPBMetadata;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \Spiral\Shared\Services\Payment\v1\GPBMetadata\Message::initOnce();
        \Spiral\Shared\Services\Common\v1\GPBMetadata\Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa9100a1b6170692f63696e656d612f76312f6d6573736167652e70726f746f12116170692e63696e656d612e76312e64746f1a1c6170692f7061796d656e742f76312f6d6573736167652e70726f746f1a1b6170692f636f6d6d6f6e2f76312f6d6573736167652e70726f746f22e0020a0b5265736572766174696f6e120c0a047575696418012001280912260a05736561747318022003280b32172e6170692e63696e656d612e76312e64746f2e53656174122f0a0973637265656e696e6718032001280b321c2e6170692e63696e656d612e76312e64746f2e53637265656e696e67122c0a0a746f74616c5f636f737418042001280b32182e6170692e636f6d6d6f6e2e76312e64746f2e4d6f6e6579122e0a0a637265617465645f617418052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f0a0b63616e63656c65645f617418062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a0a657870697265735f617418072001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122b0a07706169645f617418082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d702280020a0d53637265656e696e6746756c6c120a0a02696418012001280512270a056d6f76696518022001280b32182e6170692e63696e656d612e76312e64746f2e4d6f76696512310a0a61756469746f7269756d18032001280b321d2e6170692e63696e656d612e76312e64746f2e41756469746f7269756d122d0a097374617274735f617418042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012270a05707269636518052001280b32182e6170692e636f6d6d6f6e2e76312e64746f2e4d6f6e6579122f0a0e72657365727665645f736561747318072003280b32172e6170692e63696e656d612e76312e64746f2e5365617422c1010a0953637265656e696e67120a0a02696418012001280512270a056d6f76696518022001280b32182e6170692e63696e656d612e76312e64746f2e4d6f76696512120a0a61756469746f7269756d18032001280912130a0b746f74616c5f7365617473180420012805122d0a097374617274735f617418052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012270a05707269636518062001280b32182e6170692e636f6d6d6f6e2e76312e64746f2e4d6f6e657922490a054d6f766965120a0a026964180120012805120d0a057469746c6518022001280912130a0b6465736372697074696f6e18032001280912100a086475726174696f6e180420012805224e0a0a41756469746f7269756d120a0a026964180120012805120c0a046e616d6518022001280912260a05736561747318032003280b32172e6170692e63696e656d612e76312e64746f2e53656174222f0a0453656174120a0a026964180120012805120b0a03726f77180220012805120e0a066e756d626572180320012805221e0a1053637265656e696e6752657175657374120a0a02696418012001280522480a1153637265656e696e67526573706f6e736512330a0973637265656e696e6718012001280b32202e6170692e63696e656d612e76312e64746f2e53637265656e696e6746756c6c22110a0f5363686564756c655265717565737422440a105363686564756c65526573706f6e736512300a0a73637265656e696e677318012003280b321c2e6170692e63696e656d612e76312e64746f2e53637265656e696e67227c0a0e526573657276655265717565737412140a0c73637265656e696e675f6964180120012805121b0a137265736572766174696f6e5f747970655f6964180220012805120f0a07757365725f696418032001280512260a05736561747318042003280b32172e6170692e63696e656d612e76312e64746f2e5365617422460a0f52657365727665526573706f6e736512330a0b7265736572766174696f6e18012001280b321e2e6170692e63696e656d612e76312e64746f2e5265736572766174696f6e22260a135265736572766174696f6e7352657175657374120f0a07757365725f6964180120012805224c0a145265736572766174696f6e73526573706f6e736512340a0c7265736572766174696f6e7318012003280b321e2e6170692e63696e656d612e76312e64746f2e5265736572766174696f6e22270a0d43616e63656c5265717565737412160a0e7265736572766174696f6e5f696418012001280922200a0e43616e63656c526573706f6e7365120e0a0673746174757318012001280822290a0f50757263686173655265717565737412160a0e7265736572766174696f6e5f696418012001280922400a105075726368617365526573706f6e7365122c0a077265636569707418012001280b321b2e6170692e7061796d656e742e76312e64746f2e5265636569707422510a11436865636b53656174735265717565737412140a0c73637265656e696e675f696418012001280512260a05736561747318022003280b32172e6170692e63696e656d612e76312e64746f2e53656174225c0a12436865636b5365617473526573706f6e7365122f0a0e72657365727665645f736561747318012003280b32172e6170692e63696e656d612e76312e64746f2e5365617412150a0d6572726f725f6d6573736167651802200128094256ca022453706972616c5c5368617265645c53657276696365735c43696e656d615c76315c44544fe2022c53706972616c5c5368617265645c53657276696365735c43696e656d615c76315c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

