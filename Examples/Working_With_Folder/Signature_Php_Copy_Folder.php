<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\CopyFolderRequest("signaturedocs", "signaturedocs1", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFolder($request);
		
		echo "Expected response type is Void: 'signaturedocs' folder copied as 'signaturedocs1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>