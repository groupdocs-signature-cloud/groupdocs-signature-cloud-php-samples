<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXX-XXXXX-XXXXX-XXXXX';
    static $AppKey = 'XXXXXXXXXXXXXXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'XXXXX';

    // Getting the Sign API Instance
    public static function GetSignApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new SignApi instance
        return new GroupDocs\Signature\SignApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new InfoApi instance
        return new GroupDocs\Signature\InfoApi($configuration);
    }

     // Getting the Signature StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Signature\StorageApi($configuration);
    }

     // Getting the Signature FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Signature\FolderApi($configuration);
    }

	// Getting the Signature FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Signature\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Signature\FileApi($configuration);
    }
}
