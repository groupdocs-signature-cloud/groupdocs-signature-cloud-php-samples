<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\CreateFolderRequest("signaturedocs", CommonUtils::$MyStorage);
		$apiInstance->createFolder($request);
		
		echo "Expected response type is Void: 'signaturedocs' folder created.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>