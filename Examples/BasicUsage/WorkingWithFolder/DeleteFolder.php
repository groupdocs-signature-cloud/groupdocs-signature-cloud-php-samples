<?php

class DeleteFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();


	$request = new GroupDocs\Signature\Model\Requests\DeleteFolderRequest("signaturedocs1\\signaturedocs1", null, true);
	$apiInstance->deleteFolder($request);
	
	echo "Expected response type is Void: 'signaturedocs1/signaturedocs1' folder deleted recursively.", "<br />";
  }
}
