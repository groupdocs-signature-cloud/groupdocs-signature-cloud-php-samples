<?php

include(__DIR__ . '\CommonUtils.php');

try {
    $storageApi = CommonUtils::GetStorageApiInstance();
	$fileApi = CommonUtils::GetFileApiInstance();

    $folder = realpath(__DIR__ . '\Resources');
    $filePathInStorage = "";
    
    $dir_iterator = new \RecursiveDirectoryIterator($folder);
    $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
    
    echo 'Uploading file process executing....<br />';
    
    foreach ($iterator as $file) {
        if (!$file->isDir()) {
            $filePath = $file->getPathName();

            $filePathInStorage = str_replace($folder . '\\', "", $filePath);

            echo $filePathInStorage;
            echo "<br>";

            $isExistRequest = new \GroupDocs\Signature\Model\Requests\objectExistsRequest($filePathInStorage);
            $isExistResponse = $storageApi->objectExists($isExistRequest);

            if (!$isExistResponse->getExists()) {
                $putCreateRequest = new \GroupDocs\Signature\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
            }
        }
    }
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}