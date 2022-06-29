<?php

// This example demonstrates how to get metered license consumption info.
class GetLicenseConsumption {
    public static function Run() {
        $licenseApi = Utils::GetLicenseApiInstance();
        $response = $licenseApi->getConsumptionCredit();
        echo "Credits = " . strval($response->getCredit());
        echo "\n";                            
    }
}
