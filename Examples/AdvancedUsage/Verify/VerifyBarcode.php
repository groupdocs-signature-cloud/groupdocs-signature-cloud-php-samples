<?php

class VerifyBarcode {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\signedBarcodeOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\VerifySettings();
	$settings->setFileInfo($fileInfo);

	$options = new GroupDocs\Signature\Model\VerifyBarcodeOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	$options->setBarcodeType("Code128");
	$options->setText("123456789012");
	
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(5);
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$options->setPagesSetup($pagesSetup);
	
	$settings->setOptions([$options]);
	
	$request = new GroupDocs\Signature\Model\Requests\VerifySignaturesRequest($settings);
	$response = $apiInstance->verifySignatures($request);

    echo "Response: ", $response->getIsSuccess();
  }
}
