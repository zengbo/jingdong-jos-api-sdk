<?php

namespace ACES\Request;

class PopVenderGetMemberBasicInfoRequest extends AbstractRequest
{

    public function getApiMethodName()
    {
        return 'jingdong.pop.vender.getMemberBasicInfo';
    }

    public function getOpenId():string
    {
        return $this->apiParas['openId'];
    }

    public function setOpenId(string $open_id)
    {
        $this->apiParas['openId'] = $open_id;
        return $this;
    }

    public function getXId():string
    {
        return $this->apiParas['xId'];
    }

    public function setXId(string $x_id)
    {
        $this->apiParas['xId'] = $x_id;
        return $this;
    }
}
