<?php

class CopyFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\CopyFolderRequest("signaturedocs", "signaturedocs1");
	$apiInstance->copyFolder($request);
	
	echo "Expected response type is Void: 'signaturedocs' folder copied as 'signaturedocs1'.", "<br />";
  }
}
