<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetSignApiInstance();

	$fileInfo = new GroupDocs\Signature\Model\FileInfo();
	$fileInfo->setFilePath("signaturedocs\signedCollectionsOne_page.docx");
	$fileInfo->setPassword("");

	$settings = new GroupDocs\Signature\Model\VerifySettings();
	$settings->setFileInfo($fileInfo);

	$options = new GroupDocs\Signature\Model\VerifyDigitalOptions();
	$options->setDocumentType(GroupDocs\Signature\Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
	$options->setPage(1);
	$options->setAllPages(false);        
	$options->setSignatureType(GroupDocs\Signature\Model\OptionsBase::SIGNATURE_TYPE_DIGITAL);        
	
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

    echo "Response: ", $response->getFileInfo();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}