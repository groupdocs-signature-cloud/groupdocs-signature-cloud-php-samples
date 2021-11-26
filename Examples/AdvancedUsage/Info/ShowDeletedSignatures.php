<?php

// Get document information from File with showing deleted signatures info
class ShowDeletedSignatures {
  public static function Run() { 
      $infoApi = Utils::GetInfoApiInstance();

	  $fileInfo = new GroupDocs\Signature\Model\FileInfo();
	  $fileInfo->setFilePath("signaturedocs\one-page.docx");

	  $settings = new GroupDocs\Signature\Model\InfoSettings();
	  $settings->setFileInfo($fileInfo);
	  $settings->setShowDeletedSignaturesInfo(true);
			
	  $request = new GroupDocs\Signature\Model\Requests\getInfoRequest($settings);
	  $response = $infoApi->getInfo($request);	  
      
      echo "InfoResult.PagesCount: " . $response->getPagesCount();
      echo "\n";
  }
}
