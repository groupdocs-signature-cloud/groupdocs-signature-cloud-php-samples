<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\CopyFileRequest("signaturedocs\one-page.docx", "signaturedocs\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFile($request);
		
		echo "Expected response type is Void: 'signaturedocs/one-page.docx' file copied as 'signaturedocs/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>