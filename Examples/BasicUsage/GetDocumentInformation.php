<?php

// This example demonstrates how to get document information
class GetDocumentInformation {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

	  $fileInfo = new GroupDocs\Signature\Model\FileInfo();
	  $fileInfo->setFilePath("signaturedocs\one-page.docx");

	  $settings = new GroupDocs\Signature\Model\InfoSettings();
	  $settings->setFileInfo($fileInfo);
			
	  $request = new GroupDocs\Signature\Model\Requests\getInfoRequest($settings);
	  $response = $infoApi->getInfo($request);	  
      
      echo "InfoResult.PagesCount: " . $response->getPagesCount();
      echo "\n";
  }
}
