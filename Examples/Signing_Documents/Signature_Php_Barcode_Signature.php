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
	$saveOptions->setOutputFilePath("signaturedocs\signedBarcodeOne_page.docx");
	$settings->setSaveOptions($saveOptions);
	
	$options = new GroupDocs\Signature\Model\SignBarcodeOptions();
	$options->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
	$options->setBarcodeType("Code128");
	$options->setText("123456789012");
	$options->setCodeTextAlignment(GroupDocs\Signature\Model\SignBarcodeOptions::CODE_TEXT_ALIGNMENT_NONE);
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
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("BlueViolet");
	$options->setForeColor($color);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("DarkOrange");
	$options->setBorderColor($color);        
	$options->setBackgroundColor($color);
	$options->setOpacity(0.8);
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(2);        
	$options->setInnerMargins($padding);
	$options->setBorderVisiblity(true);
	$options->setBorderDashStyle(GroupDocs\Signature\Model\SignTextOptions::BORDER_DASH_STYLE_DASH);
	$options->setBorderWeight(12);
	
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
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}