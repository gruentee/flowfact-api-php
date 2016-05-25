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
        $users = $this->client->getUsers();
        $this->assertNotEmpty($users);
        foreach ($users as $user) {
            $this->assertInstanceOf($user, UserType::class);
        }
    }


    public function testGetUser()
    {
        $this->expectException(\InvalidArgumentException::class);
        // Should throw InvalidArgumentException
        $user = $this->client->getUser(5);
    }
    
    public function testGetCharacteristics()
    {
        $this->expectException(\InvalidArgumentException::class);
        // Should throw InvalidArgumentException
        $this->client->getCharacteristics('');
        $this->client->getCharacteristics(5);
        $this->client->getCharacteristics('bla');

    }
}
