<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosResponseBody\videos;

use AlibabaCloud\Tea\Model;

class videoTags extends Model
{
    /**
     * @var string
     */
    public $parentTagName;

    /**
     * @var float
     */
    public $tagConfidence;

    /**
     * @var int
     */
    public $tagLevel;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'parentTagName' => 'ParentTagName',
        'tagConfidence' => 'TagConfidence',
        'tagLevel'      => 'TagLevel',
        'tagName'       => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentTagName) {
            $res['ParentTagName'] = $this->parentTagName;
        }
        if (null !== $this->tagConfidence) {
            $res['TagConfidence'] = $this->tagConfidence;
        }
        if (null !== $this->tagLevel) {
            $res['TagLevel'] = $this->tagLevel;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentTagName'])) {
            $model->parentTagName = $map['ParentTagName'];
        }
        if (isset($map['TagConfidence'])) {
            $model->tagConfidence = $map['TagConfidence'];
        }
        if (isset($map['TagLevel'])) {
            $model->tagLevel = $map['TagLevel'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
