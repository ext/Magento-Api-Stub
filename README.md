# Magento SOAP API Module Stub

A stub module which provides a custom API using SOAP. Works with both V1 and V2 (but not WSI yet). Supposed to work out-of-the-box. Tested on Magento 1.8 - 1.9.

# Usage

1. Install module
2. Flush cache (to refresh config.xml and api.xml)
3. Create new API Role with appropriate permissions
4. Create new API User and assign it the newly created role
5. If WSDL cache is enabled (System -> Configuration -> Magento Core API) you may need to flush system WSDL cache (e.g. remove file from `/tmp` but read documentation for your system)
6. Fetch `http://example.net/api/v2_soap?wsdl=1` in a browser and make sure `myresource` is present.
7. Try to use the API in your client

# Sample client

```PHP
// API V2
$client = new SoapClient('http://example.net/api/v2_soap?wsdl=1');
$session = $client->login($user, $apikey);
var_dump($client->apiprefix_myresourceMyfunction($session));

// API V1
$client = new SoapClient('http://example.net/api/soap/?wsdl=1');
$session = $client->login($user, $apikey);
var_dump($client->call($session, 'myresource.myfunction', array(array())));
```
