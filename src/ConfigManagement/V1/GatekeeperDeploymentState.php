<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State of Policy Controller installation.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.GatekeeperDeploymentState</code>
 */
class GatekeeperDeploymentState extends \Google\Protobuf\Internal\Message
{
    /**
     * Status of gatekeeper-controller-manager pod.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_controller_manager_state = 1;</code>
     */
    protected $gatekeeper_controller_manager_state = 0;
    /**
     * Status of gatekeeper-audit deployment.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_audit = 2;</code>
     */
    protected $gatekeeper_audit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $gatekeeper_controller_manager_state
     *           Status of gatekeeper-controller-manager pod.
     *     @type int $gatekeeper_audit
     *           Status of gatekeeper-audit deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Status of gatekeeper-controller-manager pod.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_controller_manager_state = 1;</code>
     * @return int
     */
    public function getGatekeeperControllerManagerState()
    {
        return $this->gatekeeper_controller_manager_state;
    }

    /**
     * Status of gatekeeper-controller-manager pod.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_controller_manager_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGatekeeperControllerManagerState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\ConfigManagement\V1\DeploymentState::class);
        $this->gatekeeper_controller_manager_state = $var;

        return $this;
    }

    /**
     * Status of gatekeeper-audit deployment.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_audit = 2;</code>
     * @return int
     */
    public function getGatekeeperAudit()
    {
        return $this->gatekeeper_audit;
    }

    /**
     * Status of gatekeeper-audit deployment.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState gatekeeper_audit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGatekeeperAudit($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\ConfigManagement\V1\DeploymentState::class);
        $this->gatekeeper_audit = $var;

        return $this;
    }

}

