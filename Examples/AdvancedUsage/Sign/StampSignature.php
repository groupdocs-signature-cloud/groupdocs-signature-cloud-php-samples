<?php

class StampSignature {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\one-page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SignSettings();
	$settings->setFileInfo($fileInfo);

	$saveOptions = new GroupDocs\Signature\Model\SaveOptions();
	$saveOptions->setOutputFilePath("signaturedocs\signedStampOne_page.docx");
	$settings->setSaveOptions($saveOptions);
	
	$options = new GroupDocs\Signature\Model\SignStampOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_STAMP);
	$options->setImageFilePath("signaturedocs\signature.jpg");
	$options->setLeft(100);
	$options->setTop(100);
	$options->setWidth(300);
	$options->setHeight(100);
	$options->setLocationMeasureType(GroupDocs\Signature\Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
	$options->setSizeMeasureType(GroupDocs\Signature\Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
	$options->setRotationAngle(0);
	$options->setHorizontalAlignment(GroupDocs\Signature\Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
	$options->setVerticalAlignment(GroupDocs\Signature\Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
	
	$padding = new GroupDocs\Signature\Model\Padding();
	$padding->setAll(5);
	$options->setMargin($padding);
	$options->setMarginMeasureType(GroupDocs\Signature\Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("CornflowerBlue");
	$options->setBackgroundColor($color);
	$options->setBackgroundColorCropType(GroupDocs\Signature\Model\SignStampOptions::BACKGROUND_COLOR_CROP_TYPE_INNER_AREA);
	$options->setBackgroundImageCropType(GroupDocs\Signature\Model\SignStampOptions::BACKGROUND_IMAGE_CROP_TYPE_MIDDLE_AREA);
	
	$stampLine = new GroupDocs\Signature\Model\StampLine();
	$stampLine->setText("John Smith");
	$stampLine->setTextBottomIntent(5);
	$stampLine->setTextRepeatType(GroupDocs\Signature\Model\StampLine::TEXT_REPEAT_TYPE_FULL_TEXT_REPEAT);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("Gold");
	$stampLine->setTextColor($color);        
	$stampLine->setHeight(30);
	$stampLine->setVisible(true);
	$options->setOuterLines([$stampLine]);
	
	$stampLine = new GroupDocs\Signature\Model\StampLine();
	$stampLine->setText("John Smith");
	$stampLine->setTextBottomIntent(3);
	$stampLine->setTextRepeatType(GroupDocs\Signature\Model\StampLine::TEXT_REPEAT_TYPE_NONE);
	$color = new GroupDocs\Signature\Model\Color();
	$color->setWeb("Gold");
	$stampLine->setTextColor($color);        
	$stampLine->setHeight(30);
	$stampLine->setVisible(true);
	$options->setInnerLines([$stampLine]);        
	
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
