<?php

class CopyFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\CopyFileRequest("signaturedocs\one-page.docx", "signaturedocs\one-page-copied.docx");
	$apiInstance->copyFile($request);
	
	echo "Expected response type is Void: 'signaturedocs/one-page.docx' file copied as 'signaturedocs/one-page-copied.docx'.";
  }
}
