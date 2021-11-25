<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images;

use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images\faces\emotionDetails;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images\faces\faceAttributes;
use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @var int
     */
    public $age;

    /**
     * @var float
     */
    public $attractive;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var float
     */
    public $emotionConfidence;

    /**
     * @var emotionDetails
     */
    public $emotionDetails;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;

    /**
     * @var float
     */
    public $faceConfidence;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var float
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $genderConfidence;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'age'               => 'Age',
        'attractive'        => 'Attractive',
        'emotion'           => 'Emotion',
        'emotionConfidence' => 'EmotionConfidence',
        'emotionDetails'    => 'EmotionDetails',
        'faceAttributes'    => 'FaceAttributes',
        'faceConfidence'    => 'FaceConfidence',
        'faceId'            => 'FaceId',
        'faceQuality'       => 'FaceQuality',
        'gender'            => 'Gender',
        'genderConfidence'  => 'GenderConfidence',
        'groupId'           => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->attractive) {
            $res['Attractive'] = $this->attractive;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->emotionConfidence) {
            $res['EmotionConfidence'] = $this->emotionConfidence;
        }
        if (null !== $this->emotionDetails) {
            $res['EmotionDetails'] = null !== $this->emotionDetails ? $this->emotionDetails->toMap() : null;
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }
        if (null !== $this->faceConfidence) {
            $res['FaceConfidence'] = $this->faceConfidence;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->genderConfidence) {
            $res['GenderConfidence'] = $this->genderConfidence;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Attractive'])) {
            $model->attractive = $map['Attractive'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['EmotionConfidence'])) {
            $model->emotionConfidence = $map['EmotionConfidence'];
        }
        if (isset($map['EmotionDetails'])) {
            $model->emotionDetails = emotionDetails::fromMap($map['EmotionDetails']);
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }
        if (isset($map['FaceConfidence'])) {
            $model->faceConfidence = $map['FaceConfidence'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GenderConfidence'])) {
            $model->genderConfidence = $map['GenderConfidence'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
