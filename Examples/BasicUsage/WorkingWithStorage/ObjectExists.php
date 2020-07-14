<?php

class ObjectExists {
  public static function Run() { 
	$apiInstance = Utils::GetStorageApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\ObjectExistsRequest("signaturedocs\one-page.docx");
	$response = $apiInstance->objectExists($request);
	
	echo "Expected response type is ObjectExist: ", $response;
  }
}
