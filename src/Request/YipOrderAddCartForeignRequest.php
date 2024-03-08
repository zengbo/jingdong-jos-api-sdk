<?php

namespace ACES\Request;

class YipOrderAddCartForeignRequest extends AbstractRequest
{
    
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName() {
        return 'jingdong.yip.order.addCartForeign';
    }

    public function setThirdPartyParam(string $thirdPartyParam) {
        $this->apiParas['thirdPartyParam'] = $thirdPartyParam;
    }
}
