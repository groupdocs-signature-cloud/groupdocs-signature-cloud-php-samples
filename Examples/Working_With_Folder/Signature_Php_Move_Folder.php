<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Signature\Model\Requests\MoveFolderRequest("signaturedocs1", "signaturedocs1\\signaturedocs1", CommonUtils::$MyStorage, CommonUtils::$MyStorage, true);
		$apiInstance->moveFolder($request);
		
		echo "Expected response type is Void: 'signaturedocs1' folder moved to 'signaturedocs1/signaturedocs1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>