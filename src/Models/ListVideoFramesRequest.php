<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class ListVideoFramesRequest extends Model
{
    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $videoUri;
    protected $_name = [
        'marker'   => 'Marker',
        'project'  => 'Project',
        'setId'    => 'SetId',
        'videoUri' => 'VideoUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVideoFramesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }

        return $model;
    }
}
