<?php

namespace ACES\Request;

class VcItemProductGetRequest extends AbstractRequest
{
    
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName() {
        return 'jingdong.vc.item.product.get';
    }

    public function setWareId(string $wareId) {
        $this->apiParas['wareId'] = $wareId;
    }
}
