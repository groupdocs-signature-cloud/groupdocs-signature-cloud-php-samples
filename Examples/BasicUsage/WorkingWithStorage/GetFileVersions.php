<?php

class GetFileVersions {
  public static function Run() { 
	$apiInstance = Utils::GetStorageApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\GetFileVersionsRequest("signaturedocs\one-page.docx");
	$response = $apiInstance->getFileVersions($request);
	
	echo "Expected response type is FileVersions: ", $response;
  }
}
