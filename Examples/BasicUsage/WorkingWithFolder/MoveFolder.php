<?php

class MoveFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Signature\Model\Requests\MoveFolderRequest("signaturedocs1", "signaturedocs1\\signaturedocs1", null, null, true);
	$apiInstance->moveFolder($request);
	
	echo "Expected response type is Void: 'signaturedocs1' folder moved to 'signaturedocs1/signaturedocs1'.", "<br />";
  }
}
