<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainAccountWithKeyPairAutoCreationRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $recoverPassword;
    protected $_name = [
        'account'         => 'Account',
        'antChainId'      => 'AntChainId',
        'password'        => 'Password',
        'recoverPassword' => 'RecoverPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->recoverPassword) {
            $res['RecoverPassword'] = $this->recoverPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntChainAccountWithKeyPairAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RecoverPassword'])) {
            $model->recoverPassword = $map['RecoverPassword'];
        }

        return $model;
    }
}
