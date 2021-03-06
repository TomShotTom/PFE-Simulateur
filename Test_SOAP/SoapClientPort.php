<?php
class My_SoapClient extends SoapClient {

public function __construct($wsdl) {
$url = parse_url($wsdl);
if ($url['port']) {
$this->_port = $url['port'];
}
return parent::__construct($wsdl);
}

public function __doRequest($request, $location, $action, $version) {
$parts = parse_url($location);
if ($this->_port) {
$parts['port'] = $this->_port;
}
$location = $this->buildLocation($parts);

$return = parent::__doRequest($request, $location, $action, $version);
return $return;
}

public function buildLocation($parts = array()) {
$location = '';

if (isset($parts['scheme'])) {
$location .= $parts['scheme'].'://';
}
if (isset($parts['user']) || isset($parts['pass'])) {
$location .= $parts['user'].':'.$parts['pass'].'@';
}
$location .= $parts['host'];
if (isset($parts['port'])) {
$location .= ':'.$parts['port'];
}
$location .= $parts['path'];
if (isset($parts['query'])) {
$location .= '?'.$parts['query'];
}

return $location;
}
}
?>