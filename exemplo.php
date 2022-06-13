<?php

require_once "vendor/autoload.php";

use \Search\ZipCode\Search;

$search = new Search;

$results = $search->getAddressFromZipCode('14815000');


print_r($results);
