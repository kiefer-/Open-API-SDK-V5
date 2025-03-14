<?php


namespace okv5;


class FundingApi extends Utils
{
//
    public function getDepositAddress($ccy)
    {
        $params = [
            'ccy' => $ccy,
        ];

        return $this->request('/api/v5/asset/deposit-address',$params, 'GET');
    }

    //
    public function getBalance($ccy='')
    {
        $params = [
            'ccy' => $ccy,
        ];
        return $this->request('/api/v5/asset/balances',$params, 'GET');
    }

    //
    public function transfer($ccy,$amt,$type='',$from,$to,$subAcct='',$instId='',$toInstId='')
    {
        $params = [
            'ccy' => $ccy,
            'amt' => $amt,
            'type' => $type,
            'from' => $from,
            'to' => $to,
            'subAcct' => $subAcct,
            'instId' => $instId,
            'toInstId' => $toInstId,
        ];

        return $this->request('/api/v5/asset/transfer',$params, 'POST');
    }

    public function transferState($transId,$type='')
    {
        $params = [
            'transId' => $transId,
            'type' => $type,
        ];

        return $this->request('/api/v5/asset/transfer-state',$params, 'GET');
    }

    public function withdrawal($ccy,$chain='',$amt,$dest,$toAddr,$pwd,$fee)
    {
        $params = [
            'ccy' => $ccy,
            'chain' => $chain,
            'amt' => $amt,
            'dest' => $dest,
            'toAddr' => $toAddr,
            'pwd' => $pwd,
            'fee' => $fee,
        ];

        return $this->request('/api/v5/asset/withdrawal',$params, 'POST');
    }

    public function getDepositHistory($ccy='',$state='',$after='',$before='',$limit='',$txId='')
    {
        $params = [
            'ccy' => $ccy,
            'state' => $state,
            'after' => $after,
            'before' => $before,
            'limit' => $limit,
            'txId' => $txId,
        ];

        return $this->request('/api/v5/asset/deposit-history',$params, 'GET');
    }

    public function getWithdrawalHistory($ccy='',$state='',$after='',$before='',$limit='',$txId='')
    {
        $params = [
            'ccy' => $ccy,
            'state' => $state,
            'after' => $after,
            'before' => $before,
            'limit' => $limit,
            'txId' => $txId,
        ];

        return $this->request('/api/v5/asset/withdrawal-history',$params, 'GET');
    }

    public function getCurrencies()
    {
        return $this->request('/api/v5/asset/currencies','', 'GET');
    }

    public function PurchaseRedempt($ccy,$amt,$side)
    {
        $params = [
            'ccy' => $ccy,
            'amt' => $amt,
            'side' => $side,
        ];

        return $this->request('/api/v5/asset/purchase_redempt',$params, 'POST');
    }

    public function getBills($ccy='',$type='',$after='',$before='',$limit='')
    {
        $params = [
            'ccy' => $ccy,
            'type' => $type,
            'after' => $after,
            'before' => $before,
            'limit' => $limit,
        ];

        return $this->request('/api/v5/asset/bills',$params, 'GET');
    }

    public function getPiggyBalance($ccy='')
    {
        $params = [
            'ccy' => $ccy,
        ];

        return $this->request('/api/v5/asset/piggy-balance',$params, 'GET');
    }

    public function depositLightning($ccy,$amt,$to='')
    {
        $params = [
            'ccy' => $ccy,
            'amt' => $amt,
            'to' => $to,
        ];

        return $this->request('/api/v5/asset/deposit-lightning',$params, 'GET');
    }

    public function withdrawalLightning($ccy,$invoice,$pwd)
    {
        $params = [
            'ccy' => $ccy,
            'invoice' => $invoice,
            'pwd' => $pwd,
        ];

        return $this->request('/api/v5/asset/withdrawal-lightning',$params, 'POST');
    }
}
