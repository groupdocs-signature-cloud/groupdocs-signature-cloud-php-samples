<?php

class CreateFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\CreateFolderRequest("signaturedocs");
	$apiInstance->createFolder($request);
	
	echo "Expected response type is Void: 'signaturedocs' folder created.", "<br />";
  }
}
