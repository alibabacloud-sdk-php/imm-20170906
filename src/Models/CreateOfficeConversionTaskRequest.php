<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskRequest extends Model
{
    /**
     * @var int
     */
    public $displayDpi;

    /**
     * @var int
     */
    public $endPage;

    /**
     * @var bool
     */
    public $fitToPagesTall;

    /**
     * @var bool
     */
    public $fitToPagesWide;

    /**
     * @var bool
     */
    public $hidecomments;

    /**
     * @var string
     */
    public $idempotentToken;

    /**
     * @var int
     */
    public $maxSheetCol;

    /**
     * @var int
     */
    public $maxSheetCount;

    /**
     * @var int
     */
    public $maxSheetRow;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $pdfVector;

    /**
     * @var string
     */
    public $project;

    /**
     * @var bool
     */
    public $sheetOnePage;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcUri;

    /**
     * @var int
     */
    public $startPage;

    /**
     * @var string
     */
    public $tgtFilePages;

    /**
     * @var string
     */
    public $tgtFilePrefix;

    /**
     * @var string
     */
    public $tgtFileSuffix;

    /**
     * @var string
     */
    public $tgtType;

    /**
     * @var string
     */
    public $tgtUri;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'displayDpi'      => 'DisplayDpi',
        'endPage'         => 'EndPage',
        'fitToPagesTall'  => 'FitToPagesTall',
        'fitToPagesWide'  => 'FitToPagesWide',
        'hidecomments'    => 'Hidecomments',
        'idempotentToken' => 'IdempotentToken',
        'maxSheetCol'     => 'MaxSheetCol',
        'maxSheetCount'   => 'MaxSheetCount',
        'maxSheetRow'     => 'MaxSheetRow',
        'modelId'         => 'ModelId',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'password'        => 'Password',
        'pdfVector'       => 'PdfVector',
        'project'         => 'Project',
        'sheetOnePage'    => 'SheetOnePage',
        'srcType'         => 'SrcType',
        'srcUri'          => 'SrcUri',
        'startPage'       => 'StartPage',
        'tgtFilePages'    => 'TgtFilePages',
        'tgtFilePrefix'   => 'TgtFilePrefix',
        'tgtFileSuffix'   => 'TgtFileSuffix',
        'tgtType'         => 'TgtType',
        'tgtUri'          => 'TgtUri',
        'userData'        => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayDpi) {
            $res['DisplayDpi'] = $this->displayDpi;
        }
        if (null !== $this->endPage) {
            $res['EndPage'] = $this->endPage;
        }
        if (null !== $this->fitToPagesTall) {
            $res['FitToPagesTall'] = $this->fitToPagesTall;
        }
        if (null !== $this->fitToPagesWide) {
            $res['FitToPagesWide'] = $this->fitToPagesWide;
        }
        if (null !== $this->hidecomments) {
            $res['Hidecomments'] = $this->hidecomments;
        }
        if (null !== $this->idempotentToken) {
            $res['IdempotentToken'] = $this->idempotentToken;
        }
        if (null !== $this->maxSheetCol) {
            $res['MaxSheetCol'] = $this->maxSheetCol;
        }
        if (null !== $this->maxSheetCount) {
            $res['MaxSheetCount'] = $this->maxSheetCount;
        }
        if (null !== $this->maxSheetRow) {
            $res['MaxSheetRow'] = $this->maxSheetRow;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->pdfVector) {
            $res['PdfVector'] = $this->pdfVector;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->sheetOnePage) {
            $res['SheetOnePage'] = $this->sheetOnePage;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }
        if (null !== $this->startPage) {
            $res['StartPage'] = $this->startPage;
        }
        if (null !== $this->tgtFilePages) {
            $res['TgtFilePages'] = $this->tgtFilePages;
        }
        if (null !== $this->tgtFilePrefix) {
            $res['TgtFilePrefix'] = $this->tgtFilePrefix;
        }
        if (null !== $this->tgtFileSuffix) {
            $res['TgtFileSuffix'] = $this->tgtFileSuffix;
        }
        if (null !== $this->tgtType) {
            $res['TgtType'] = $this->tgtType;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOfficeConversionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayDpi'])) {
            $model->displayDpi = $map['DisplayDpi'];
        }
        if (isset($map['EndPage'])) {
            $model->endPage = $map['EndPage'];
        }
        if (isset($map['FitToPagesTall'])) {
            $model->fitToPagesTall = $map['FitToPagesTall'];
        }
        if (isset($map['FitToPagesWide'])) {
            $model->fitToPagesWide = $map['FitToPagesWide'];
        }
        if (isset($map['Hidecomments'])) {
            $model->hidecomments = $map['Hidecomments'];
        }
        if (isset($map['IdempotentToken'])) {
            $model->idempotentToken = $map['IdempotentToken'];
        }
        if (isset($map['MaxSheetCol'])) {
            $model->maxSheetCol = $map['MaxSheetCol'];
        }
        if (isset($map['MaxSheetCount'])) {
            $model->maxSheetCount = $map['MaxSheetCount'];
        }
        if (isset($map['MaxSheetRow'])) {
            $model->maxSheetRow = $map['MaxSheetRow'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PdfVector'])) {
            $model->pdfVector = $map['PdfVector'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SheetOnePage'])) {
            $model->sheetOnePage = $map['SheetOnePage'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }
        if (isset($map['StartPage'])) {
            $model->startPage = $map['StartPage'];
        }
        if (isset($map['TgtFilePages'])) {
            $model->tgtFilePages = $map['TgtFilePages'];
        }
        if (isset($map['TgtFilePrefix'])) {
            $model->tgtFilePrefix = $map['TgtFilePrefix'];
        }
        if (isset($map['TgtFileSuffix'])) {
            $model->tgtFileSuffix = $map['TgtFileSuffix'];
        }
        if (isset($map['TgtType'])) {
            $model->tgtType = $map['TgtType'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
