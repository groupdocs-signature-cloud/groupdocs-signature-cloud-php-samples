<?php

class DeleteFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\DeleteFileRequest("signaturedocs\one-page-copied.docx");
	$apiInstance->deleteFile($request);
	
	echo "Expected response type is Void: 'signaturedocs1/one-page-copied.docx' file deleted.";
  }
}
