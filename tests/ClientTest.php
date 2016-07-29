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
            $this->assertInstanceOf('UserType', $user);
        }
    }


    public function testForUsersGet()
    {
        $uuid = "AAC94B33-01F8-3783-B597-AE7456DF1B78"; // user "test"
        $resp = $this->client->forUsers($uuid)->get();
        $this->assertInstanceOf('GuzzleHttp\Psr7\Response', $resp);
        $user = $resp->getBody()->getContents();
        $this->assertEquals($uuid, json_decode($user)->value->id);
    }

    public function testCreateContact()
    {
        // TODO: refactor to use mocked response
        $number = random_int(0,100);
        $data = [
            'name' => ['lastname' => 'TestUser' . $number]
        ];
        $resp = $this->client->forUsers('AAC94B33-01F8-3783-B597-AE7456DF1B78')
            ->forContacts()
            ->post($data);
        $this->assertEquals('201', $resp->getStatusCode());
    }

    public function testCreateEstate()
    {
        $testEstate = [
            'internaldescription' => 'Test-Wohnung',
            'origin' => [
                'id' => "9AB30EBD-096C-492E-88E3-D4F779518E91",
                'rel' => "Wohnung-Kauf",
                'href' => "https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/customers/301001/propertyassistances/estatedetails/9AB30EBD-096C-492E-88E3-D4F779518E91"
            ]
        ];
        $resp = $this->client->getUsers('AAC94B33-01F8-3783-B597-AE7456DF1B78')
            ->getEstates()
            ->post($testEstate);
        $this->assertEquals('201', $resp->getStatusCode());
    }

    public function testMapXml() {
        $this->client->setAcceptFormat('xml');
        $resp = $this->client->forUsers("AAC94B33-01F8-3783-B597-AE7456DF1B78")
            ->forContacts()
            ->get();
        $this->assertInstanceOf(\SimpleXMLElement::class, $this->client->map($resp->getBody()->getContents()));
    }

    public function testMapJson() {
        $this->client->setAcceptFormat('json');
        $resp = $this->client->forUsers("AAC94B33-01F8-3783-B597-AE7456DF1B78")
            ->forContacts()
            ->get();

    }
}
