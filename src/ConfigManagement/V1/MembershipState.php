<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **Anthos Config Management**: State for a single cluster.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.MembershipState</code>
 */
class MembershipState extends \Google\Protobuf\Internal\Message
{
    /**
     * This field is set to the `cluster_name` field of the Membership Spec if it
     * is not empty. Otherwise, it is set to the cluster's fleet membership name.
     *
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     */
    protected $cluster_name = '';
    /**
     * Membership configuration in the cluster. This represents the actual state
     * in the cluster, while the MembershipSpec in the FeatureSpec represents
     * the intended state
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec membership_spec = 2;</code>
     */
    protected $membership_spec = null;
    /**
     * Current install status of ACM's Operator
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.OperatorState operator_state = 3;</code>
     */
    protected $operator_state = null;
    /**
     * Current sync status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSyncState config_sync_state = 4;</code>
     */
    protected $config_sync_state = null;
    /**
     * PolicyController status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyControllerState policy_controller_state = 5;</code>
     */
    protected $policy_controller_state = null;
    /**
     * Hierarchy Controller status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerState hierarchy_controller_state = 7;</code>
     */
    protected $hierarchy_controller_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_name
     *           This field is set to the `cluster_name` field of the Membership Spec if it
     *           is not empty. Otherwise, it is set to the cluster's fleet membership name.
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\MembershipSpec $membership_spec
     *           Membership configuration in the cluster. This represents the actual state
     *           in the cluster, while the MembershipSpec in the FeatureSpec represents
     *           the intended state
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\OperatorState $operator_state
     *           Current install status of ACM's Operator
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState $config_sync_state
     *           Current sync status
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyControllerState $policy_controller_state
     *           PolicyController status
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerState $hierarchy_controller_state
     *           Hierarchy Controller status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * This field is set to the `cluster_name` field of the Membership Spec if it
     * is not empty. Otherwise, it is set to the cluster's fleet membership name.
     *
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * This field is set to the `cluster_name` field of the Membership Spec if it
     * is not empty. Otherwise, it is set to the cluster's fleet membership name.
     *
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Membership configuration in the cluster. This represents the actual state
     * in the cluster, while the MembershipSpec in the FeatureSpec represents
     * the intended state
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec membership_spec = 2;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\MembershipSpec|null
     */
    public function getMembershipSpec()
    {
        return $this->membership_spec;
    }

    public function hasMembershipSpec()
    {
        return isset($this->membership_spec);
    }

    public function clearMembershipSpec()
    {
        unset($this->membership_spec);
    }

    /**
     * Membership configuration in the cluster. This represents the actual state
     * in the cluster, while the MembershipSpec in the FeatureSpec represents
     * the intended state
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec membership_spec = 2;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\MembershipSpec $var
     * @return $this
     */
    public function setMembershipSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\MembershipSpec::class);
        $this->membership_spec = $var;

        return $this;
    }

    /**
     * Current install status of ACM's Operator
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.OperatorState operator_state = 3;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\OperatorState|null
     */
    public function getOperatorState()
    {
        return $this->operator_state;
    }

    public function hasOperatorState()
    {
        return isset($this->operator_state);
    }

    public function clearOperatorState()
    {
        unset($this->operator_state);
    }

    /**
     * Current install status of ACM's Operator
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.OperatorState operator_state = 3;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\OperatorState $var
     * @return $this
     */
    public function setOperatorState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\OperatorState::class);
        $this->operator_state = $var;

        return $this;
    }

    /**
     * Current sync status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSyncState config_sync_state = 4;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState|null
     */
    public function getConfigSyncState()
    {
        return $this->config_sync_state;
    }

    public function hasConfigSyncState()
    {
        return isset($this->config_sync_state);
    }

    public function clearConfigSyncState()
    {
        unset($this->config_sync_state);
    }

    /**
     * Current sync status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSyncState config_sync_state = 4;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState $var
     * @return $this
     */
    public function setConfigSyncState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState::class);
        $this->config_sync_state = $var;

        return $this;
    }

    /**
     * PolicyController status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyControllerState policy_controller_state = 5;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyControllerState|null
     */
    public function getPolicyControllerState()
    {
        return $this->policy_controller_state;
    }

    public function hasPolicyControllerState()
    {
        return isset($this->policy_controller_state);
    }

    public function clearPolicyControllerState()
    {
        unset($this->policy_controller_state);
    }

    /**
     * PolicyController status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyControllerState policy_controller_state = 5;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyControllerState $var
     * @return $this
     */
    public function setPolicyControllerState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyControllerState::class);
        $this->policy_controller_state = $var;

        return $this;
    }

    /**
     * Hierarchy Controller status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerState hierarchy_controller_state = 7;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerState|null
     */
    public function getHierarchyControllerState()
    {
        return $this->hierarchy_controller_state;
    }

    public function hasHierarchyControllerState()
    {
        return isset($this->hierarchy_controller_state);
    }

    public function clearHierarchyControllerState()
    {
        unset($this->hierarchy_controller_state);
    }

    /**
     * Hierarchy Controller status
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerState hierarchy_controller_state = 7;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerState $var
     * @return $this
     */
    public function setHierarchyControllerState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerState::class);
        $this->hierarchy_controller_state = $var;

        return $this;
    }

}

