<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetInfoApiInstance();

    $response = $apiInstance->getSupportedQRCodes();

    echo '<b>Supported QrCodes<br /></b>';
	foreach($response->getQRCodeTypes() as $key => $format) {
	  echo $format->getName(), "<br />";
	}
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}