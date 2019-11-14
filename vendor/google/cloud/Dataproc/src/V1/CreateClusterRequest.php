<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.CreateClusterRequest</code>
 */
class CreateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Required. The cluster to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster = null;
    /**
     * Optional. A unique id used to identify the request. If the server
     * receives two [CreateClusterRequest][google.cloud.dataproc.v1.CreateClusterRequest] requests  with the same
     * id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the backend
     * is returned.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform project that the cluster
     *           belongs to.
     *     @type string $region
     *           Required. The Cloud Dataproc region in which to handle the request.
     *     @type \Google\Cloud\Dataproc\V1\Cluster $cluster
     *           Required. The cluster to create.
     *     @type string $request_id
     *           Optional. A unique id used to identify the request. If the server
     *           receives two [CreateClusterRequest][google.cloud.dataproc.v1.CreateClusterRequest] requests  with the same
     *           id, then the second request will be ignored and the
     *           first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the backend
     *           is returned.
     *           It is recommended to always set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The id must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Required. The cluster to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\Cluster
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Required. The cluster to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. A unique id used to identify the request. If the server
     * receives two [CreateClusterRequest][google.cloud.dataproc.v1.CreateClusterRequest] requests  with the same
     * id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the backend
     * is returned.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique id used to identify the request. If the server
     * receives two [CreateClusterRequest][google.cloud.dataproc.v1.CreateClusterRequest] requests  with the same
     * id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the backend
     * is returned.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

