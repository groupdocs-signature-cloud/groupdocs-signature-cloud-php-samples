<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\DeleteFolderRequest("signaturedocs1\\signaturedocs1", CommonUtils::$MyStorage, true);
		$apiInstance->deleteFolder($request);
		
		echo "Expected response type is Void: 'signaturedocs1/signaturedocs1' folder deleted recursively.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>