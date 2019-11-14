<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Intents.BatchDeleteIntents][google.cloud.dialogflow.v2.Intents.BatchDeleteIntents].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.BatchDeleteIntentsRequest</code>
 */
class BatchDeleteIntentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. The collection of intents to delete. Only intent `name` must be
     * filled in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent intents = 2;</code>
     */
    private $intents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the agent to delete all entities types for. Format:
     *           `projects/<Project ID>/agent`.
     *     @type \Google\Cloud\Dialogflow\V2\Intent[]|\Google\Protobuf\Internal\RepeatedField $intents
     *           Required. The collection of intents to delete. Only intent `name` must be
     *           filled in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the agent to delete all entities types for. Format:
     * `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The collection of intents to delete. Only intent `name` must be
     * filled in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent intents = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntents()
    {
        return $this->intents;
    }

    /**
     * Required. The collection of intents to delete. Only intent `name` must be
     * filled in.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent intents = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent::class);
        $this->intents = $arr;

        return $this;
    }

}

