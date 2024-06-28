<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OCI repo configuration for a single cluster
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.OciConfig</code>
 */
class OciConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The OCI image repository URL for the package to sync from.
     * e.g. `LOCATION-docker.pkg.dev/PROJECT_ID/REPOSITORY_NAME/PACKAGE_NAME`.
     *
     * Generated from protobuf field <code>string sync_repo = 1;</code>
     */
    protected $sync_repo = '';
    /**
     * The absolute path of the directory that contains
     * the local resources.  Default: the root directory of the image.
     *
     * Generated from protobuf field <code>string policy_dir = 2;</code>
     */
    protected $policy_dir = '';
    /**
     * Period in seconds between consecutive syncs. Default: 15.
     *
     * Generated from protobuf field <code>int64 sync_wait_secs = 3;</code>
     */
    protected $sync_wait_secs = 0;
    /**
     * Type of secret configured for access to the Git repo.
     *
     * Generated from protobuf field <code>string secret_type = 4;</code>
     */
    protected $secret_type = '';
    /**
     * The Google Cloud Service Account Email used for auth when secret_type is
     * gcpServiceAccount.
     *
     * Generated from protobuf field <code>string gcp_service_account_email = 5;</code>
     */
    protected $gcp_service_account_email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sync_repo
     *           The OCI image repository URL for the package to sync from.
     *           e.g. `LOCATION-docker.pkg.dev/PROJECT_ID/REPOSITORY_NAME/PACKAGE_NAME`.
     *     @type string $policy_dir
     *           The absolute path of the directory that contains
     *           the local resources.  Default: the root directory of the image.
     *     @type int|string $sync_wait_secs
     *           Period in seconds between consecutive syncs. Default: 15.
     *     @type string $secret_type
     *           Type of secret configured for access to the Git repo.
     *     @type string $gcp_service_account_email
     *           The Google Cloud Service Account Email used for auth when secret_type is
     *           gcpServiceAccount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * The OCI image repository URL for the package to sync from.
     * e.g. `LOCATION-docker.pkg.dev/PROJECT_ID/REPOSITORY_NAME/PACKAGE_NAME`.
     *
     * Generated from protobuf field <code>string sync_repo = 1;</code>
     * @return string
     */
    public function getSyncRepo()
    {
        return $this->sync_repo;
    }

    /**
     * The OCI image repository URL for the package to sync from.
     * e.g. `LOCATION-docker.pkg.dev/PROJECT_ID/REPOSITORY_NAME/PACKAGE_NAME`.
     *
     * Generated from protobuf field <code>string sync_repo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSyncRepo($var)
    {
        GPBUtil::checkString($var, True);
        $this->sync_repo = $var;

        return $this;
    }

    /**
     * The absolute path of the directory that contains
     * the local resources.  Default: the root directory of the image.
     *
     * Generated from protobuf field <code>string policy_dir = 2;</code>
     * @return string
     */
    public function getPolicyDir()
    {
        return $this->policy_dir;
    }

    /**
     * The absolute path of the directory that contains
     * the local resources.  Default: the root directory of the image.
     *
     * Generated from protobuf field <code>string policy_dir = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPolicyDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->policy_dir = $var;

        return $this;
    }

    /**
     * Period in seconds between consecutive syncs. Default: 15.
     *
     * Generated from protobuf field <code>int64 sync_wait_secs = 3;</code>
     * @return int|string
     */
    public function getSyncWaitSecs()
    {
        return $this->sync_wait_secs;
    }

    /**
     * Period in seconds between consecutive syncs. Default: 15.
     *
     * Generated from protobuf field <code>int64 sync_wait_secs = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSyncWaitSecs($var)
    {
        GPBUtil::checkInt64($var);
        $this->sync_wait_secs = $var;

        return $this;
    }

    /**
     * Type of secret configured for access to the Git repo.
     *
     * Generated from protobuf field <code>string secret_type = 4;</code>
     * @return string
     */
    public function getSecretType()
    {
        return $this->secret_type;
    }

    /**
     * Type of secret configured for access to the Git repo.
     *
     * Generated from protobuf field <code>string secret_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretType($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_type = $var;

        return $this;
    }

    /**
     * The Google Cloud Service Account Email used for auth when secret_type is
     * gcpServiceAccount.
     *
     * Generated from protobuf field <code>string gcp_service_account_email = 5;</code>
     * @return string
     */
    public function getGcpServiceAccountEmail()
    {
        return $this->gcp_service_account_email;
    }

    /**
     * The Google Cloud Service Account Email used for auth when secret_type is
     * gcpServiceAccount.
     *
     * Generated from protobuf field <code>string gcp_service_account_email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGcpServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_service_account_email = $var;

        return $this;
    }

}

