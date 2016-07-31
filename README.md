#flowfact-api-php

A simple wrapper around the [FLOWFACT API](https://flowfact.atlassian.net/wiki/display/FA/Version+1.0.X).

* Uses [Guzzle](http://docs.guzzlephp.org/en/latest/) for HTTP requests.
* Features a fluent interface for building HTTP queries: build any resource path via dynamic method calls
* Returns HTTP responses according to [PSR-7](http://www.php-fig.org/psr/psr-7/)

## Usage example
Building resource paths (ie. `/users/<UUID>/contacs/<UUID>`) through chaining method calls with the name of the 
desired resource prefixed by either `for` or `get`. Single resources can be specified by passing the identifier as an
 argument to the call denoting the resource, same goes for adding query parameters. 

```php
// initialize client
$client = new Client('USERNAME', 'PASSWORD', 'CUSTOMER_ID', 'https://api.baseurl.tld/');

// build URL: prefix the desired resource with "get" or "for"
// /users/68ed219e-5755-11e6-8b77-86f30ca893d3/contacts
$client->getUsers("68ed219e-5755-11e6-8b77-86f30ca893d3")
    ->getContacts();
// submit request
$response = $client->get();
 
// POST /users/68ed219e-5755-11e6-8b77-86f30ca893d3/contacts
$data = [
    'name' => ['lastname' => 'TestUser']
];

$resp = $client->forUsers('AAC94B33-01F8-3783-B597-AE7456DF1B78')
    ->forContacts()
    ->post($data);


```
 
 
 ## TODO
 * Map XML and JSON responses to PHP classes corresponding to response models