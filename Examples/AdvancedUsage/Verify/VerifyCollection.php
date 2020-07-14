<?php

class VerifyCollection {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs/signedCollectionsOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\VerifySettings();
	$settings->setFileInfo($fileInfo);

	// Verify Text options
	$textOptions = new GroupDocs\Signature\Model\VerifyTextOptions();
	$textOptions->setPage(1);
	$textOptions->setAllPages(false);        
	$textOptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_TEXT);        
	$textOptions->setText("GroupDocs Cloud");
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$textOptions->setPagesSetup($pagesSetup);
	
	// Verify Barcode options
	$barcodeOptions = new GroupDocs\Signature\Model\VerifyBarcodeOptions();
	$barcodeOptions->setPage(1);
	$barcodeOptions->setAllPages(false);        
	$barcodeOptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	$barcodeOptions->setBarcodeType("Code128");
	$barcodeOptions->setText("123456789012");
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$barcodeOptions->setPagesSetup($pagesSetup);

	$settings->setOptions([$textOptions, $barcodeOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\VerifySignaturesRequest($settings);
	$response = $apiInstance->verifySignatures($request);

    echo "Response: ", $response->getIsSuccess();
  }
}
