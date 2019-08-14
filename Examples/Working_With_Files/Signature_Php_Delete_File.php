<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\DeleteFileRequest("signaturedocs\one-page-copied.docx", CommonUtils::$MyStorage);
		$apiInstance->deleteFile($request);
		
		echo "Expected response type is Void: 'signaturedocs1/one-page-copied.docx' file deleted.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>