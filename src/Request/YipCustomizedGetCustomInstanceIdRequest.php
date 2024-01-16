<?php

namespace ACES\Request;

class YipCustomizedGetCustomInstanceIdRequest extends AbstractRequest
{
    
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName() {
        return 'jingdong.yip.customized.getCustomInstanceId';
    }

    public function setSkuId(string $skuId) {
        $this->apiParas['skuId'] = $skuId;
    }

    public function setRawUserKey(string $rawUserKey) {
        $this->apiParas['rawUserKey'] = $rawUserKey;        
    }
}