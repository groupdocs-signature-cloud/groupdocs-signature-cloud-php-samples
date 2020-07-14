<?php

class UpdateBarcode {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\signedBarcodeOne_page.docx");	

	// Search
	$settings = new GroupDocs\Signature\Model\SearchSettings();
	$settings->setFileInfo($fileInfo);

	$options = new GroupDocs\Signature\Model\SearchBarcodeOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	
	$settings->setOptions([$options]);
	
	$request = new GroupDocs\Signature\Model\Requests\SearchSignaturesRequest($settings);
	$response = $apiInstance->searchSignatures($request);

	// Update
	$updateSettings = new GroupDocs\Signature\Model\UpdateSettings();
	$updateSettings->setFileInfo($fileInfo);

	$updateOptions = new GroupDocs\Signature\Model\UpdateOptions();    
	$updateOptions->setSignatureType(GroupDocs\Signature\Model\UpdateOptions::SIGNATURE_TYPE_BARCODE);
	$updateOptions->setSignatureId($response->getSignatures()[0]->getSignatureId());
	$updateOptions->setIsSignature(true);
	$updateOptions->setLeft(200);
	$updateOptions->setTop(200);
	$updateOptions->setWidth(300);
	$updateOptions->setHeight(100);
	
	$updateSettings->setOptions([$updateOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\UpdateSignaturesRequest($updateSettings);
	$response = $apiInstance->updateSignatures($request);	

    echo "Signatures updated: ", count($response->getSucceeded());
  }
}
