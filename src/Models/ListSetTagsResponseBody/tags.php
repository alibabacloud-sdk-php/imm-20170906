<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListSetTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var int
     */
    public $tagLevel;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $tagCount;
    protected $_name = [
        'tagLevel' => 'TagLevel',
        'tagName'  => 'TagName',
        'tagCount' => 'TagCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagLevel) {
            $res['TagLevel'] = $this->tagLevel;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagLevel'])) {
            $model->tagLevel = $map['TagLevel'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }

        return $model;
    }
}
