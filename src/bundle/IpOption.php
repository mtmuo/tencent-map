<?php
namespace eg\tencent\map\bundle;

use eg\tencent\map\Option;

/**
 * IP定位
 * 参数
 */
class IpOption extends Option
{
    /**
     * IP地址
     * @param string $value
     */
    public function setIp($value)
    {
        $this->option['ip'] = $value;
    }
}
