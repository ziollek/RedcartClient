<?php


namespace RedcartClient\Tests\Api;


use Guzzle\Http\Message\Response;
use RedcartClient\Api\Client;

class ClientTest extends \PHPUnit_Framework_TestCase {


    /**
     * @test
     */
    public function shouldAddApiKeyToPostData()
    {
        $apiKey = 'api_key_string';

        $requestMock = $this->getMock('\\Guzzle\\Http\\Message\\RequestInterface');

        $requestMock->expects($this->any())
            ->method('send')
            ->will($this->returnValue($this->getResponseMock()));

        $guzzleClientMock = $this->getMockBuilder('\\Guzzle\\Http\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $guzzleClientMock->expects($this->once())
            ->method('post')
            ->with($this->equalTo(''), $this->equalTo(''), $this->equalTo(array('key' => $apiKey)))
            ->will($this->returnValue($requestMock));

        $client = new Client($guzzleClientMock, $apiKey);

        $client->call(array());
    }

    /**
     * @test
     */
    public function shouldReturnJsonEncodedData()
    {
        $jsonContent = array('data' => '123');

        $response = $this->getResponseMock(true);
        $response->expects($this->once())
            ->method('json')
            ->will($this->returnValue($jsonContent));

        $guzzleClientMock = $this->getGuzzleMockWithResponse($response);

        $client = new Client($guzzleClientMock, '');

        $this->assertSame($jsonContent, $client->call(array()));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionIfResponseIsNotSuccessful()
    {
        $response = $this->getResponseMock(false);
        $guzzleClientMock = $this->getGuzzleMockWithResponse($response);

        $client = new Client($guzzleClientMock, '');

        $this->setExpectedException('\\RedcartClient\\Exception\\RedcartResponseException');
        $client->call(array());
    }

    /**
     * @test
     */
    public function shouldThrowExceptionIfContentContainsJsonWithError()
    {
        $jsonContent = '{"error": {"message": "Error occured", "code": "E_ERROR_CODE"}}';

        $response = $this->getResponseMock(true);
        $response->expects($this->once())
            ->method('json')
            ->will($this->returnValue($jsonContent));

        $guzzleClientMock = $this->getGuzzleMockWithResponse($response);

        $client = new Client($guzzleClientMock, '');

        $this->setExpectedException('\\RedcartClient\\Exception\\RedcartResponseException');
        $this->assertSame($jsonContent, $client->call(array()));
    }

    /**
     * @param $response
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|Response
     */
    private function getGuzzleMockWithResponse($response)
    {
        $requestMock = $this->getMock('\\Guzzle\\Http\\Message\\RequestInterface');

        $requestMock->expects($this->any())
            ->method('send')
            ->will($this->returnValue($response));

        $guzzleClientMock = $this->getMockBuilder('\\Guzzle\\Http\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $guzzleClientMock->expects($this->any())
            ->method('post')
            ->will($this->returnValue($requestMock));

        return $guzzleClientMock;
    }

    /**
     * @param bool $successful
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|Response
     */
    private function getResponseMock($successful = true)
    {
        $responseMock = $this->getMockBuilder('\\Guzzle\\Http\\Message\\Response')
            ->disableOriginalConstructor()
            ->getMock();

        $responseMock->expects($this->any())
            ->method('isSuccessful')
            ->will($this->returnValue($successful));

        return $responseMock;
    }

}
