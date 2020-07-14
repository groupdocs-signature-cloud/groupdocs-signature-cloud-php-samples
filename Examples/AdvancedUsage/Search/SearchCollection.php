<?php

class SearchCollection {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs/signedCollectionsOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SearchSettings();
	$settings->setFileInfo($fileInfo);

	// Search QrCode options
	$QrCodeoptions = new GroupDocs\Signature\Model\SearchQRCodeOptions();
	$QrCodeoptions->setPage(1);
	$QrCodeoptions->setAllPages(false);        
	$QrCodeoptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_QR_CODE);        
	$QrCodeoptions->setQRCodeType("Aztec");	
	
	// Search Barcode options
	$barcodeOptions = new GroupDocs\Signature\Model\SearchBarcodeOptions();
	$barcodeOptions->setPage(1);
	$barcodeOptions->setAllPages(false);        
	$barcodeOptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	$barcodeOptions->setBarcodeType("Code128");
	$barcodeOptions->setText("123456789012");	

	$settings->setOptions([$QrCodeoptions, $barcodeOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\SearchSignaturesRequest($settings);
	$response = $apiInstance->searchSignatures($request);

    echo "Signatures Found: ", count($response->getSignatures());
  }
}
