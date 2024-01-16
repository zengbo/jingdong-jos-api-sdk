<?php
use ACES\Request\AbstractRequest;

class SkuReadFindSkuByIdRequest extends AbstractRequest
{
    /**
     * 请求的数据类型.
     * @return string
     */
    public function getApiMethodName()
    {
        return 'jingdong.sku.read.findSkuById';
    }

    public function setSkuId(string $skuId)
    {
        $this->apiParas['skuId'] = $skuId;
    }

    public function setField(string $field)
    {
        $this->apiParas['field'] = $field;
    }
}