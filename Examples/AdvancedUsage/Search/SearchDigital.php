<?php

class SearchDigital {
  public static function Run() { 
	$apiInstance = Utils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\signedDigitalOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\SearchSettings();
	$settings->setFileInfo($fileInfo);

	$options = new GroupDocs\Signature\Model\SearchDigitalOptions();
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_DIGITAL);        	
	
	$settings->setOptions([$options]);
	
	$request = new GroupDocs\Signature\Model\Requests\SearchSignaturesRequest($settings);
	$response = $apiInstance->searchSignatures($request);

    echo "Signatures Found: ", count($response->getSignatures());
  }
}
