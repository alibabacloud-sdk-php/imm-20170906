<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces\faceAttributes;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces\similarFaces;
use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var float
     */
    public $similarity;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var similarFaces[]
     */
    public $similarFaces;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;
    protected $_name = [
        'externalId'     => 'ExternalId',
        'similarity'     => 'Similarity',
        'faceId'         => 'FaceId',
        'imageUri'       => 'ImageUri',
        'similarFaces'   => 'SimilarFaces',
        'faceAttributes' => 'FaceAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->similarFaces) {
            $res['SimilarFaces'] = [];
            if (null !== $this->similarFaces && \is_array($this->similarFaces)) {
                $n = 0;
                foreach ($this->similarFaces as $item) {
                    $res['SimilarFaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['SimilarFaces'])) {
            if (!empty($map['SimilarFaces'])) {
                $model->similarFaces = [];
                $n                   = 0;
                foreach ($map['SimilarFaces'] as $item) {
                    $model->similarFaces[$n++] = null !== $item ? similarFaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }

        return $model;
    }
}
