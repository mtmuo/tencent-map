<?php
namespace eg\tencent\map\bundle;

use eg\tencent\map\Option;

/**
 * 逆地址解析（坐标位置描述）
 * 参数
 */
class LocationOption extends Option
{
    public function setLocation($lat, $lng)
    {
        $this->option['location'] = "{$lat},{$lng}";
    }
}
