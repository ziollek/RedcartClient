<?php

namespace RedcartClient\Modules\Hello;

use RedcartClient\Modules\BaseModule;

class Module extends BaseModule{


    /**
     * @param string $name
     *
     * @return string
     */
    public function hello($name) {
        $postData = $this->getPostData('hello');
        $postData['parameters'] = array('name' => $name);

        $response = $this->client->call($postData);

        return $response['hello'];
    }
}