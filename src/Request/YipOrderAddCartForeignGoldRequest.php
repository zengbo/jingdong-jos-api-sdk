<?php

namespace ACES\Request;

class YipOrderAddCartForeignGoldRequest extends AbstractRequest
{
    
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName() {
        return 'jingdong.yip.order.addCartForeignGold';
    }

    public function setThirdPartyParam(string $thirdPartyParam) {
        $this->apiParas['thirdPartyParam'] = $thirdPartyParam;
    }
}