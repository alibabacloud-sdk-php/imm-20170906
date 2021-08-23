<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails\QRCodes;

use AlibabaCloud\Tea\Model;

class QRCodesRectangle extends Model
{
    /**
     * @var string
     */
    public $left;

    /**
     * @var string
     */
    public $top;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;
    protected $_name = [
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QRCodesRectangle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
