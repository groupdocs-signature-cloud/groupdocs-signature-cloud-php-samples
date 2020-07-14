<?php

class StorageExist {
  public static function Run() { 
	$apiInstance = Utils::GetStorageApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\StorageExistsRequest("First Storage");
	$response = $apiInstance->storageExists($request);
		
	echo "Expected response type is StorageExist: ", $response;
  }
}
