<?php
/**
 * Created by PhpStorm.
 * User: Dml
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace Dml\EasyTBK\Vip;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}
