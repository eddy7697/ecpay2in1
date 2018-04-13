<?php

namespace Eddy7697\Ecpay2in1;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Ecpay
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * Ecpay constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($value = '')
    {
        return 'test';
    }

    public function logistics()
    {
        $logistics = new \ECPayLogistics();

        $logistics->ServiceURL = config('allpay.ServiceURL');
        $logistics->HashKey    = config('allpay.HashKey');
        $logistics->HashIV     = config('allpay.HashIV');
        $logistics->MerchantID = config('allpay.MerchantID');
        
        return $logistics;
    }

    public function instance()
    {
        $instance = new \ECPay_AllInOne();

        $instance->ServiceURL = config('allpay.ServiceURL');
        $instance->HashKey    = config('allpay.HashKey');
        $instance->HashIV     = config('allpay.HashIV');
        $instance->MerchantID = config('allpay.MerchantID');

        return $instance;
    }
}
