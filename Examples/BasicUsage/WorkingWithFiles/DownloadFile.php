<?php

class DownloadFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\DownloadFileRequest("signaturedocs\one-page.docx");
	$response = $apiInstance->downloadFile($request);
	
	echo "Expected response type is File: ", strlen($response);
  }
}
