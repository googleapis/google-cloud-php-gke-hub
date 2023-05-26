<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State indicating an ACM's progress syncing configurations to a cluster
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.SyncState</code>
 */
class SyncState extends \Google\Protobuf\Internal\Message
{
    /**
     * Token indicating the state of the repo.
     *
     * Generated from protobuf field <code>string source_token = 1;</code>
     */
    private $source_token = '';
    /**
     * Token indicating the state of the importer.
     *
     * Generated from protobuf field <code>string import_token = 2;</code>
     */
    private $import_token = '';
    /**
     * Token indicating the state of the syncer.
     *
     * Generated from protobuf field <code>string sync_token = 3;</code>
     */
    private $sync_token = '';
    /**
     * Deprecated: use last_sync_time instead.
     * Timestamp of when ACM last successfully synced the repo
     * The time format is specified in https://golang.org/pkg/time/#Time.String
     *
     * Generated from protobuf field <code>string last_sync = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $last_sync = '';
    /**
     * Timestamp type of when ACM last successfully synced the repo
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_sync_time = 7;</code>
     */
    private $last_sync_time = null;
    /**
     * Sync status code
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.SyncState.SyncCode code = 5;</code>
     */
    private $code = 0;
    /**
     * A list of errors resulting from problematic configs.
     * This list will be truncated after 100 errors, although it is
     * unlikely for that many errors to simultaneously exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.SyncError errors = 6;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_token
     *           Token indicating the state of the repo.
     *     @type string $import_token
     *           Token indicating the state of the importer.
     *     @type string $sync_token
     *           Token indicating the state of the syncer.
     *     @type string $last_sync
     *           Deprecated: use last_sync_time instead.
     *           Timestamp of when ACM last successfully synced the repo
     *           The time format is specified in https://golang.org/pkg/time/#Time.String
     *     @type \Google\Protobuf\Timestamp $last_sync_time
     *           Timestamp type of when ACM last successfully synced the repo
     *     @type int $code
     *           Sync status code
     *     @type array<\Google\Cloud\GkeHub\ConfigManagement\V1\SyncError>|\Google\Protobuf\Internal\RepeatedField $errors
     *           A list of errors resulting from problematic configs.
     *           This list will be truncated after 100 errors, although it is
     *           unlikely for that many errors to simultaneously exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Token indicating the state of the repo.
     *
     * Generated from protobuf field <code>string source_token = 1;</code>
     * @return string
     */
    public function getSourceToken()
    {
        return $this->source_token;
    }

    /**
     * Token indicating the state of the repo.
     *
     * Generated from protobuf field <code>string source_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_token = $var;

        return $this;
    }

    /**
     * Token indicating the state of the importer.
     *
     * Generated from protobuf field <code>string import_token = 2;</code>
     * @return string
     */
    public function getImportToken()
    {
        return $this->import_token;
    }

    /**
     * Token indicating the state of the importer.
     *
     * Generated from protobuf field <code>string import_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImportToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_token = $var;

        return $this;
    }

    /**
     * Token indicating the state of the syncer.
     *
     * Generated from protobuf field <code>string sync_token = 3;</code>
     * @return string
     */
    public function getSyncToken()
    {
        return $this->sync_token;
    }

    /**
     * Token indicating the state of the syncer.
     *
     * Generated from protobuf field <code>string sync_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSyncToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->sync_token = $var;

        return $this;
    }

    /**
     * Deprecated: use last_sync_time instead.
     * Timestamp of when ACM last successfully synced the repo
     * The time format is specified in https://golang.org/pkg/time/#Time.String
     *
     * Generated from protobuf field <code>string last_sync = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getLastSync()
    {
        @trigger_error('last_sync is deprecated.', E_USER_DEPRECATED);
        return $this->last_sync;
    }

    /**
     * Deprecated: use last_sync_time instead.
     * Timestamp of when ACM last successfully synced the repo
     * The time format is specified in https://golang.org/pkg/time/#Time.String
     *
     * Generated from protobuf field <code>string last_sync = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setLastSync($var)
    {
        @trigger_error('last_sync is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->last_sync = $var;

        return $this;
    }

    /**
     * Timestamp type of when ACM last successfully synced the repo
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_sync_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastSyncTime()
    {
        return $this->last_sync_time;
    }

    public function hasLastSyncTime()
    {
        return isset($this->last_sync_time);
    }

    public function clearLastSyncTime()
    {
        unset($this->last_sync_time);
    }

    /**
     * Timestamp type of when ACM last successfully synced the repo
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_sync_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSyncTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_sync_time = $var;

        return $this;
    }

    /**
     * Sync status code
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.SyncState.SyncCode code = 5;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sync status code
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.SyncState.SyncCode code = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\ConfigManagement\V1\SyncState\SyncCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * A list of errors resulting from problematic configs.
     * This list will be truncated after 100 errors, although it is
     * unlikely for that many errors to simultaneously exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.SyncError errors = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * A list of errors resulting from problematic configs.
     * This list will be truncated after 100 errors, although it is
     * unlikely for that many errors to simultaneously exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.SyncError errors = 6;</code>
     * @param array<\Google\Cloud\GkeHub\ConfigManagement\V1\SyncError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\ConfigManagement\V1\SyncError::class);
        $this->errors = $arr;

        return $this;
    }

}
