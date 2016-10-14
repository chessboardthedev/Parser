<?php
require_once 'Conf.php';
use Nemiro\Nginx\Conf as NginxConf;
$conf = new NginxConf('/etc/nginx/sites-available/proxy');
// var_dump($conf['server']);

// if ($conf['server']->ContainsChild('listen'))
// {
//   print_r($conf['server']['listen']->ParametersAsString());
// }

// var_dump($conf['server']['server_name']->ParametersAsString());
// var_dump($conf['server']['root']->ParametersAsString());
// var_dump($conf['server']['location']);
var_dump($conf['server']['location']['Directives']->ParametersAsString());

/*
object(Nemiro\Nginx\Directive)#2 (3) { ["Name"]=> string(6) "server" ["Parameters"]=> NULL ["Directives"]=> object(Nemiro\Nginx\DirectiveCollection)#3 (1) { ["Items"]=> array(3) { ["listen"]=> object(Nemiro\Nginx\Directive)#4 (3) { ["Name"]=> string(6) "listen" ["Parameters"]=> array(1) { [0]=> string(2) "80" } ["Directives"]=> object(Nemiro\Nginx\DirectiveCollection)#5 (1) { ["Items"]=> array(0) { } } } ["server_name"]=> object(Nemiro\Nginx\Directive)#6 (3) { ["Name"]=> string(11) "server_name" ["Parameters"]=> array(1) { [0]=> string(9) "localhost" } ["Directives"]=> object(Nemiro\Nginx\DirectiveCollection)#7 (1) { ["Items"]=> array(0) { } } } ["location"]=> object(Nemiro\Nginx\Directive)#8 (3) { ["Name"]=> string(8) "location" ["Parameters"]=> array(1) { [0]=> string(1) "/" } ["Directives"]=> object(Nemiro\Nginx\DirectiveCollection)#9 (1) { ["Items"]=> array(1) { ["proxy_pass"]=> object(Nemiro\Nginx\Directive)#10 (3) { ["Name"]=> string(10) "proxy_pass" ["Parameters"]=> array(1) { [0]=> string(19) "http://127.0.0.1:80" } ["Directives"]=> object(Nemiro\Nginx\DirectiveCollection)#11 (1) { ["Items"]=> array(0) { } } } } } } } } } 80string(9) "localhost"
*/
?>