<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs/signedCollectionsOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SearchSettings();
	$settings->setFileInfo($fileInfo);

	// Search QrCode options
	$QrCodeoptions = new GroupDocs\Signature\Model\SearchQRCodeOptions();
	$QrCodeoptions->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
	$QrCodeoptions->setPage(1);
	$QrCodeoptions->setAllPages(false);        
	$QrCodeoptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_QR_CODE);        
	$QrCodeoptions->setQRCodeType("Aztec");
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$QrCodeoptions->setPagesSetup($pagesSetup);
	
	// Search Barcode options
	$barcodeOptions = new GroupDocs\Signature\Model\SearchBarcodeOptions();
	$barcodeOptions->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
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

	$settings->setOptions([$QrCodeoptions, $barcodeOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\SearchSignaturesRequest($settings);
	$response = $apiInstance->searchSignatures($request);

    echo "Signatures Found: ", count($response->getSignatures());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}