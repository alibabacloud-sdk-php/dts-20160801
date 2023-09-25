<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrationJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $migrationJobClass;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'migrationJobClass' => 'MigrationJobClass',
        'ownerId'           => 'OwnerId',
        'region'            => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->migrationJobClass) {
            $res['MigrationJobClass'] = $this->migrationJobClass;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MigrationJobClass'])) {
            $model->migrationJobClass = $map['MigrationJobClass'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
