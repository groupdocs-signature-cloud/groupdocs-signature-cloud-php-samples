<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\one-page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SignSettings();
	$settings->setFileInfo($fileInfo);

	$saveOptions = new GroupDocs\Signature\Model\SaveOptions();
	$saveOptions->setOutputFilePath("signaturedocs\signedCollectionsOne_page.docx");
	$settings->setSaveOptions($saveOptions);
	
	// Sign Text options
	$textOptions = new GroupDocs\Signature\Model\SignTextOptions();
	$textOptions->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
	$textOptions->setPage(1);
	$textOptions->setAllPages(false);        
	$textOptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_TEXT);        
	$textOptions->setText("GroupDocs Cloud");
	$textOptions->setLeft(100);
	$textOptions->setTop(100);
	$textOptions->setWidth(100);
	$textOptions->setHeight(100);
	$textOptions->setLocationMeasureType(GroupDocs\Signature\Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
	$textOptions->setSizeMeasureType(GroupDocs\Signature\Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
	$textOptions->setStretch(GroupDocs\Signature\Model\SignTextOptions::STRETCH_NONE);
	$textOptions->setRotationAngle(0);
	$textOptions->setHorizontalAlignment(GroupDocs\Signature\Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
	$textOptions->setVerticalAlignment(GroupDocs\Signature\Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
	
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(5);
	$textOptions->setMargin($padding);
	$textOptions->setMarginMeasureType(GroupDocs\Signature\Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("BlueViolet");
	$textOptions->setForeColor($color);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("DarkOrange");
	$textOptions->setBorderColor($color);        
	$textOptions->setBackgroundColor($color);
	$textOptions->setBorderVisiblity(true);
	$textOptions->setBorderDashStyle(GroupDocs\Signature\Model\SignTextOptions::BORDER_DASH_STYLE_DASH);
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$textOptions->setPagesSetup($pagesSetup);
	
	// Sign Barcode options
	$barcodeOptions = new GroupDocs\Signature\Model\SignBarcodeOptions();
	$barcodeOptions->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
	$barcodeOptions->setPage(1);
	$barcodeOptions->setAllPages(false);        
	$barcodeOptions->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	$barcodeOptions->setBarcodeType("Code128");
	$barcodeOptions->setText("123456789012");
	$barcodeOptions->setCodeTextAlignment(GroupDocs\Signature\Model\SignBarcodeOptions::CODE_TEXT_ALIGNMENT_NONE);
	$barcodeOptions->setLeft(100);
	$barcodeOptions->setTop(100);
	$barcodeOptions->setWidth(300);
	$barcodeOptions->setHeight(100);
	$barcodeOptions->setLocationMeasureType(GroupDocs\Signature\Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
	$barcodeOptions->setSizeMeasureType(GroupDocs\Signature\Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
	$barcodeOptions->setStretch(GroupDocs\Signature\Model\SignTextOptions::STRETCH_NONE);
	$barcodeOptions->setRotationAngle(0);
	$barcodeOptions->setHorizontalAlignment(GroupDocs\Signature\Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
	$barcodeOptions->setVerticalAlignment(GroupDocs\Signature\Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
	
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(5);
	$barcodeOptions->setMargin($padding);
	
	$barcodeOptions->setMarginMeasureType(GroupDocs\Signature\Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("BlueViolet");
	$barcodeOptions->setForeColor($color);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("DarkOrange");
	$barcodeOptions->setBorderColor($color);        
	$barcodeOptions->setBackgroundColor($color);
	$barcodeOptions->setOpacity(0.8);
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(2);        
	$barcodeOptions->setInnerMargins($padding);
	$barcodeOptions->setBorderVisiblity(true);
	$barcodeOptions->setBorderDashStyle(GroupDocs\Signature\Model\SignTextOptions::BORDER_DASH_STYLE_DASH);
	$barcodeOptions->setBorderWeight(12);
	
	$pagesSetup = new GroupDocs\Signature\Model\PagesSetup();
	$pagesSetup->setEvenPages(false);
	$pagesSetup->setFirstPage(true);
	$pagesSetup->setLastPage(false);
	$pagesSetup->setOddPages(false);
	$pagesSetup->setPageNumbers([1]);
	$barcodeOptions->setPagesSetup($pagesSetup);

	$settings->setOptions([$textOptions, $barcodeOptions]);
	
	$request = new GroupDocs\Signature\Model\Requests\createSignaturesRequest($settings);
	$response = $apiInstance->createSignatures($request);

    echo "Response: ", $response->getFileInfo();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}