<?php

declare(strict_types=1);

namespace ACES\Request;

class CrmMemberSearchNewRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.crm.member.searchNew';
    }

    public function setCustomerPin(string $customer_pin): void
    {
        $this->apiParas['customer_pin'] = $customer_pin;
    }

    public function setCurrentPage(int $current_page = 1): void
    {
        $this->apiParas['current_page'] = $current_page;
    }

    public function setPageSize(int $page_size = 20): void
    {
        $this->apiParas['page_size'] = $page_size;
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
