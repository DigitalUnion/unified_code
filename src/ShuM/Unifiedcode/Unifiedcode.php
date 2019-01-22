<?php

namespace ShuM\Unifiedcode;

use Illuminate\Config\Repository;

class Unifiedcode
{

    use CommonResponse;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * Packagetest constructor
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * @param int $code
     * @param array $param
     * @return mixed|string
     */
    public function parsingCode($code = -1, $param = array())
    {

    }
}