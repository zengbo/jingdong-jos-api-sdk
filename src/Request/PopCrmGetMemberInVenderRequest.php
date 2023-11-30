<?php

declare(strict_types=1);

namespace ACES\Request;

class PopCrmGetMemberInVenderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.pop.crm.getMemberInVender';
    }

    public function setCustomerPin(string $customer_pin): void
    {
        $this->apiParas['customerPin'] = $customer_pin;
    }

    public function setOpenIdBuyer(string $open_id_buyer): void
    {
        $this->apiParas['open_id_buyer'] = $open_id_buyer;
    }

    public function setXidBuyer(string $xid_buyer): void
    {
        $this->apiParas['xid_buyer'] = $xid_buyer;
    }
}
