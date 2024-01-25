<?php

namespace ACES\Request;

class MiniappMixUserInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.miniapp.mixUserInfo';
    }

    public function setCode(string $code): void
    {
        $this->apiParas['code'] = $code;
    }
}
