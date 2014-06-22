<?php

namespace RedcartClient\Tests\Stub\Sample;

use RedcartClient\Modules\BaseModule;

class Module extends BaseModule {

    public function showPostData($method)
    {
        return $this->getPostData($method);
    }

}