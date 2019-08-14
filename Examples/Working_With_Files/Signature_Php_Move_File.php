<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\MoveFileRequest("signaturedocs\one-page.docx", "signaturedocs1\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->moveFile($request);
		
		echo "Expected response type is Void: 'signaturedocs/one-page.docx' file moved as 'signaturedocs1/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>