<?php

class MoveFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\MoveFileRequest("signaturedocs\one-page.docx", "signaturedocs1\one-page-copied.docx");
	$apiInstance->moveFile($request);
	
	echo "Expected response type is Void: 'signaturedocs/one-page.docx' file moved as 'signaturedocs1/one-page-copied.docx'.";
  }
}
