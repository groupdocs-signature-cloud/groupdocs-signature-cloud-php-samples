<?php

class DeleteQRCode {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\signedQRCodeOne_page.docx");	

	// Search
	$settings = new GroupDocs\Signature\Model\SearchSettings();
	$settings->setFileInfo($fileInfo);

	$options = new GroupDocs\Signature\Model\SearchBarcodeOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_QR_CODE);        
	
	$settings->setOptions([$options]);
	
	$request = new GroupDocs\Signature\Model\Requests\SearchSignaturesRequest($settings);
	$response = $apiInstance->searchSignatures($request);

	// Delete
	$deleteSettings = new GroupDocs\Signature\Model\DeleteSettings();
	$deleteSettings->setFileInfo($fileInfo);

	$deleteOptions = new GroupDocs\Signature\Model\DeleteOptions();    
	$deleteOptions->setSignatureType(GroupDocs\Signature\Model\DeleteOptions::SIGNATURE_TYPE_QR_CODE);
	$deleteOptions->setSignatureId($response->getSignatures()[0]->getSignatureId());
	
	$deleteSettings->setOptions([$deleteOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\DeleteSignaturesRequest($deleteSettings);
	$response = $apiInstance->deleteSignatures($request);	

    echo "Signatures deleted: ", count($response->getSucceeded());
  }
}
