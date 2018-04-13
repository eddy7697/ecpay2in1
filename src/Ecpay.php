<?php

namespace Eddy7697\Ecpay2in1;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Ecpay
{
    private $instance = null;
	private $logistics = null;

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

        $this->instance = new \ECPay_AllInOne();
        $this->logistics = new \ECPayLogistics();
        
        $this->instance->ServiceURL          = config('ecpay.ServiceURL');
        $this->instance->HashKey             = config('ecpay.HashKey');
        $this->instance->HashIV              = config('ecpay.HashIV');
        $this->instance->MerchantID          = config('ecpay.MerchantID');

        $this->logistics->Send['HashKey']    = config('ecpay.HashKey');
        $this->logistics->Send['HashIV']     = config('ecpay.HashIV');
        $this->logistics->Send['MerchantID'] = config('ecpay.MerchantID');
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
        return $this->logistics;
    }

    public function instance()
    {
        return $this->instance;
    }
}
