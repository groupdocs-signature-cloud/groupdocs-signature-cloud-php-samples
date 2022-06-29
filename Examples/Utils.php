<?php

// Utility class to hold the constants and static functions
class Utils {

    // TODO: Get your ClientId and ClientSecret at https://dashboard.groupdocs.cloud (free registration is required)
    static $ClientId = 'XXXX-XXXX-XXXX-XXXX';
    static $ClientSecret = 'XXXXXXXXXXXXXXXX';

    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'First Storage';

    // Getting the Sign API Instance
    public static function GetSignApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new SignatureAPI instance
        return new GroupDocs\Signature\SignApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Signature\InfoApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetPreviewApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Signature\PreviewApi($configuration);
    }

	// Getting the Signature StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new StorageApi instance
        return new GroupDocs\Signature\StorageApi($configuration);
    }

     // Getting the Signature FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FolderApi instance
        return new GroupDocs\Signature\FolderApi($configuration);
    }

	// Getting the Signature FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FileApi instance
        return new GroupDocs\Signature\FileApi($configuration);
    }

	// Getting the Signature LicenseAPI API Instance
    public static function GetLicenseApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FileApi instance
        return new GroupDocs\Signature\LicenseApi($configuration);
    }

    // Uploading sample files into storage
    public static function UploadResources() {
        $storageApi = self::GetStorageApiInstance();
        $fileApi = self::GetFileApiInstance();
        $folder = realpath(__DIR__ . '\Resources');
        $filePathInStorage = "";
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
        echo 'Uploading file process executing...';
        echo "\n";
        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();
                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                echo $filePathInStorage;
                echo "\n";
                $isExistRequest = new \GroupDocs\Signature\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = $storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $putCreateRequest = new \GroupDocs\Signature\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
                }
            }
        }        
    }
}
