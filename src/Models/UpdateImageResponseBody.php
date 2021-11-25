<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $remarksA;

    /**
     * @var string
     */
    public $remarksArrayA;

    /**
     * @var string
     */
    public $remarksArrayB;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'externalId'    => 'ExternalId',
        'imageUri'      => 'ImageUri',
        'modifyTime'    => 'ModifyTime',
        'remarksA'      => 'RemarksA',
        'remarksArrayA' => 'RemarksArrayA',
        'remarksArrayB' => 'RemarksArrayB',
        'remarksB'      => 'RemarksB',
        'remarksC'      => 'RemarksC',
        'remarksD'      => 'RemarksD',
        'requestId'     => 'RequestId',
        'setId'         => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->remarksArrayA) {
            $res['RemarksArrayA'] = $this->remarksArrayA;
        }
        if (null !== $this->remarksArrayB) {
            $res['RemarksArrayB'] = $this->remarksArrayB;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['RemarksArrayA'])) {
            $model->remarksArrayA = $map['RemarksArrayA'];
        }
        if (isset($map['RemarksArrayB'])) {
            $model->remarksArrayB = $map['RemarksArrayB'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
