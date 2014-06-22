<?php

namespace RedcartClient\Api;

use Guzzle\Http\Client as GuzzleClient;
use RedcartClient\Exception\RedcartResponseException;
use RedcartClient\Modules\BaseModule;

class Client {

    /**
     * @var GuzzleClient
     */
    private $guzzleClient;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param GuzzleClient $guzzleClient
     * @param string       $apiKey
     */
    public function __construct(GuzzleClient $guzzleClient, $apiKey)
    {
        $this->guzzleClient = $guzzleClient;
        $this->apiKey = $apiKey;
    }

    /**
     * @param $postData
     */
    public function call($postData)
    {
        $postData['key'] = $this->apiKey;
        $request = $this->guzzleClient->post('', '', $postData);
        $response = $request->send();
        if (!$response->isSuccessful()) {
            throw new RedcartResponseException(
                '[status: ' . $response->getStatusCode() . '] ' . $response->getReasonPhrase()
            );
        }
        $result = $response->json();
        if (is_string($result)) {
            $result = json_decode($result, true);
        }

        if (isset($result['error'])) {
            throw new RedcartResponseException(
                '['.$result['error']['code'].'] ' . $result['error']['message']
            );
        }

        return $result;
    }

}