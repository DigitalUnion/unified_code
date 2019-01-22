<?php

namespace ShuM\Unifiedcode;

class Unifiedcode
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
     * Packagetest constructor
     */
    public function __construct()
    {
        require_once('ConfigCode.php');
    }

    /**
     * @param int $code
     * @param array $param
     * @return mixed|string
     */
    public function parsingCode($code = -1, $param = array())
    {
        require_once('ConfigCode.php');
        $msg = isset($common[$code]) ? $common[$code] : '未定义异常';
        $msg = $param ? str_replace(array_keys($param), array_values($param), $msg) : $msg;
        return $msg;
    }
}