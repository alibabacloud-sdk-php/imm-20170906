<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectResponseBody extends Model
{
    /**
     * @var int
     */
    public $CU;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'CU'          => 'CU',
        'createTime'  => 'CreateTime',
        'modifyTime'  => 'ModifyTime',
        'project'     => 'Project',
        'regionId'    => 'RegionId',
        'requestId'   => 'RequestId',
        'serviceRole' => 'ServiceRole',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CU) {
            $res['CU'] = $this->CU;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CU'])) {
            $model->CU = $map['CU'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
