<?php
/**
 * User: connzen
 * Date: 19.05.16
 * Time: 14:46
 */

namespace Flowfact\Test;

use Flowfact\Client;
use Flowfact\Resources\UserType;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->client = new Client('test', '123456', '301001',
            'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/customers', 
            'json');

    }
    
    public function testGetUsers()
    {
        // should return array of UserType
        $users = $this->client->getUsers()->response;
        $this->assertNotEmpty($users);
        foreach ($users as $user) {
            $this->assertInstanceOf($user, UserType::class);
        }
    }


    public function testForUsersGet()
    {
        $uuid = "AAC94B33-01F8-3783-B597-AE7456DF1B78"; // user "test"
        $user = $this->client->forUsers($uuid)->get()->response->getBody()->getContents();
        $this->assertEquals($uuid, json_decode($user)->value->id);
    }
    
    public function testGetCharacteristics()
    {
        $this->expectException(\InvalidArgumentException::class);
        // Should throw InvalidArgumentException
        $this->client->getCharacteristics('');
        $this->client->getCharacteristics(5);
        $this->client->getCharacteristics('bla');

    }

    public function testIsValidUuid3()
    {
        $uuid3 = 'B6DCF055-CC7B-3916-BA35-C4D39A40C4FB';
        $invalid = 'asdfasdfa';
        $uuid4 = 'dd52deb9-1c88-496b-ac1a-bf9888e4a8b9';
        $this->assertTrue($this->client->isValidUuid3($uuid3));
        $this->assertTrue($this->client->isValidUuid3($invalid));
        $this->assertTrue($this->client->isValidUuid3($uuid4));
    }
}
