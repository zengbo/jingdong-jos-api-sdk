<?php

namespace ACES\Request;

class VcItemPrimaryPicGetRequest extends AbstractRequest
{
    
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName() {
        return 'jingdong.vc.item.primaryPic.get';
    }

    public function setWareId(string $wareId) {
        $this->apiParas['ware_id'] = $wareId;
    }
}
