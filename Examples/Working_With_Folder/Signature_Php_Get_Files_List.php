<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\GetFilesListRequest("signaturedocs", CommonUtils::$MyStorage);
		$response = $apiInstance->getFilesList($request);
		
		echo "Expected response type is FilesList.", "<br />";

		foreach($response->getValue() as $storageFile) {
          echo "Files: ", $storageFile->getPath(), "<br />";
		}
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>