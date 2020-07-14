<?php

class GetFilesList {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\GetFilesListRequest("signaturedocs");
	$response = $apiInstance->getFilesList($request);
	
	echo "Expected response type is FilesList.", "<br />";

	foreach($response->getValue() as $storageFile) {
	  echo "Files: ", $storageFile->getPath(), "<br />";
	}
  }
}
