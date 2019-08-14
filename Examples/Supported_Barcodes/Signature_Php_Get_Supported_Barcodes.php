<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetInfoApiInstance();

    $response = $apiInstance->getSupportedBarcodes();

    echo '<b>Supported Barcodes<br /></b>';
	foreach($response->getBarcodeTypes() as $key => $format) {
	  echo $format->getName(), "<br />";
	}
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}