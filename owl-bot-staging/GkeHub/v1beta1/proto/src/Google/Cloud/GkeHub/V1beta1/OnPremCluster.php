<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OnPremCluster contains information specific to GKE On-Prem clusters.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.OnPremCluster</code>
 */
class OnPremCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Self-link of the GCP resource for the GKE On-Prem cluster. For
     * example:
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/vmwareClusters/my-cluster
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/bareMetalClusters/my-cluster
     *
     * Generated from protobuf field <code>string resource_link = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $resource_link = '';
    /**
     * Output only. If cluster_missing is set then it denotes that
     * API(gkeonprem.googleapis.com) resource for this GKE On-Prem cluster no
     * longer exists.
     *
     * Generated from protobuf field <code>bool cluster_missing = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cluster_missing = false;
    /**
     * Immutable. Whether the cluster is an admin cluster.
     *
     * Generated from protobuf field <code>bool admin_cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $admin_cluster = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_link
     *           Immutable. Self-link of the GCP resource for the GKE On-Prem cluster. For
     *           example:
     *            //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/vmwareClusters/my-cluster
     *            //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/bareMetalClusters/my-cluster
     *     @type bool $cluster_missing
     *           Output only. If cluster_missing is set then it denotes that
     *           API(gkeonprem.googleapis.com) resource for this GKE On-Prem cluster no
     *           longer exists.
     *     @type bool $admin_cluster
     *           Immutable. Whether the cluster is an admin cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Self-link of the GCP resource for the GKE On-Prem cluster. For
     * example:
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/vmwareClusters/my-cluster
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/bareMetalClusters/my-cluster
     *
     * Generated from protobuf field <code>string resource_link = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getResourceLink()
    {
        return $this->resource_link;
    }

    /**
     * Immutable. Self-link of the GCP resource for the GKE On-Prem cluster. For
     * example:
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/vmwareClusters/my-cluster
     *  //gkeonprem.googleapis.com/projects/my-project/locations/us-west1-a/bareMetalClusters/my-cluster
     *
     * Generated from protobuf field <code>string resource_link = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_link = $var;

        return $this;
    }

    /**
     * Output only. If cluster_missing is set then it denotes that
     * API(gkeonprem.googleapis.com) resource for this GKE On-Prem cluster no
     * longer exists.
     *
     * Generated from protobuf field <code>bool cluster_missing = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getClusterMissing()
    {
        return $this->cluster_missing;
    }

    /**
     * Output only. If cluster_missing is set then it denotes that
     * API(gkeonprem.googleapis.com) resource for this GKE On-Prem cluster no
     * longer exists.
     *
     * Generated from protobuf field <code>bool cluster_missing = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setClusterMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->cluster_missing = $var;

        return $this;
    }

    /**
     * Immutable. Whether the cluster is an admin cluster.
     *
     * Generated from protobuf field <code>bool admin_cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getAdminCluster()
    {
        return $this->admin_cluster;
    }

    /**
     * Immutable. Whether the cluster is an admin cluster.
     *
     * Generated from protobuf field <code>bool admin_cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setAdminCluster($var)
    {
        GPBUtil::checkBool($var);
        $this->admin_cluster = $var;

        return $this;
    }

}

