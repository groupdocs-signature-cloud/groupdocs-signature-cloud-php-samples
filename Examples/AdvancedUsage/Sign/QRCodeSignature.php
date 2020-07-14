<?php

class QRCodeSignature {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\one-page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SignSettings();
	$settings->setFileInfo($fileInfo);

	$saveOptions = new GroupDocs\Signature\Model\SaveOptions();
	$saveOptions->setOutputFilePath("signaturedocs\signedQRCodeOne_page.docx");
	$settings->setSaveOptions($saveOptions);
	
	$options = new GroupDocs\Signature\Model\SignQRCodeOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_QR_CODE);        
	$options->setQRCodeType("Aztec");
	$options->setText("John Smith");
	$options->setLeft(100);
	$options->setTop(100);
	$options->setWidth(300);
	$options->setHeight(100);
	$options->setLocationMeasureType(GroupDocs\Signature\Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
	$options->setSizeMeasureType(GroupDocs\Signature\Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
	$options->setStretch(GroupDocs\Signature\Model\SignTextOptions::STRETCH_NONE);
	$options->setRotationAngle(0);
	$options->setHorizontalAlignment(GroupDocs\Signature\Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
	$options->setVerticalAlignment(GroupDocs\Signature\Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
	
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(5);
	$options->setMargin($padding);
	$options->setMarginMeasureType(GroupDocs\Signature\Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);

	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(2);        
	$options->setInnerMargins($padding);
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$options->setPagesSetup($pagesSetup);
	
	$settings->setOptions([$options]);
	
	$request = new GroupDocs\Signature\Model\Requests\createSignaturesRequest($settings);
	$response = $apiInstance->createSignatures($request);

    echo "Response: ", $response->getFileInfo();
  }
}
