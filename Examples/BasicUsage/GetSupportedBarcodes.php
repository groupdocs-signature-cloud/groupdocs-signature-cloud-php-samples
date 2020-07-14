
<?php

// This example demonstrates how to obtain all supported barcode types
class GetSupportedBarcodes {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

      $response = $infoApi->getSupportedBarcodes();
      
      echo "Number of barcode types = " . count($response->getBarcodeTypes());
      echo "\n";
  }
}
