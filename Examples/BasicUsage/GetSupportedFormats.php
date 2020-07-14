<?php

// This example demonstrates how to obtain all supported document formats
class GetSupportedFormats {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

      $response = $infoApi->getSupportedFileFormats();
      
      echo "Number of formats = " . count($response->getFormats());
      echo "\n";
  }
}
