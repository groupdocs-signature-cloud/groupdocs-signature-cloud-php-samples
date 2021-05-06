<?php

// This example demonstrates how to create document preview images
class GetDocumentPreview {
  public static function Run() { 
      $previewApi = Utils::GetPreviewApiInstance();

	  $fileInfo = new GroupDocs\Signature\Model\FileInfo();
	  $fileInfo->setFilePath("signaturedocs\one-page.docx");

	  $settings = new GroupDocs\Signature\Model\PreviewSettings();
	  $settings->setFileInfo($fileInfo);
			
	  $request = new GroupDocs\Signature\Model\Requests\previewDocumentRequest($settings);
	  $response = $previewApi->previewDocument($request);	  
      
      echo "PreviewResult.Pages Count: " . count($response->getPages());
      echo "\n";
  }
}
