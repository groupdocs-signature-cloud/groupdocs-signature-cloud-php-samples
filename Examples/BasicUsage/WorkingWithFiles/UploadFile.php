<?php

class UploadFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$filePath = realpath(dirname(__DIR__). '\Resources\signaturedocs\one-page.docx');
	echo "filePath: ". $filePath;

	$fileStream = readfile($filePath);
	$request = new GroupDocs\Signature\Model\Requests\UploadFileRequest("signaturedocs\one-page1.docx", $fileStream);
	$response = $apiInstance->uploadFile($request);
	
	echo "Expected response type is FilesUploadResult: ", $response;
  }
}
