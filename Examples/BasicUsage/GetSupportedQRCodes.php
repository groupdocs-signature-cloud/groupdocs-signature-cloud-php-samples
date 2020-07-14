
<?php

// This example demonstrates how to obtain all supported QRCode types
class GetSupportedQRCodes {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

      $response = $infoApi->getSupportedQRCodes();
      
      echo "Number of QRCode types = " . count($response->getQRCodeTypes());
      echo "\n";
  }
}
