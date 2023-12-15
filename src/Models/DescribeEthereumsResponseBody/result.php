<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consensus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'consensus'   => 'Consensus',
        'createTime'  => 'CreateTime',
        'creator'     => 'Creator',
        'deletable'   => 'Deletable',
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
        'networkId'   => 'NetworkId',
        'nodeNumber'  => 'NodeNumber',
        'regionId'    => 'RegionId',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consensus) {
            $res['Consensus'] = $this->consensus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Consensus'])) {
            $model->consensus = $map['Consensus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
