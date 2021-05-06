<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\Utils.php');
include(__DIR__ . '\BasicUsage\GetSupportedFormats.php');
include(__DIR__ . '\BasicUsage\GetSupportedBarcodes.php');
include(__DIR__ . '\BasicUsage\GetSupportedQRCodes.php');
include(__DIR__ . '\BasicUsage\GetDocumentInformation.php');
include(__DIR__ . '\BasicUsage\GetDocumentPreview.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\GetDiscUsage.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\GetFileVersions.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\ObjectExists.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\StorageExist.php');

include(__DIR__ . '\AdvancedUsage\Sign\BarcodeSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\CollectionSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\DigitalSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\ImageSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\QRCodeSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\StampSignature.php');
include(__DIR__ . '\AdvancedUsage\Sign\TextSignature.php');
include(__DIR__ . '\AdvancedUsage\Search\SearchBarcode.php');
include(__DIR__ . '\AdvancedUsage\Search\SearchCollection.php');
include(__DIR__ . '\AdvancedUsage\Search\SearchDigital.php');
include(__DIR__ . '\AdvancedUsage\Search\SearchQRCode.php');
include(__DIR__ . '\AdvancedUsage\Verify\VerifyBarcode.php');
include(__DIR__ . '\AdvancedUsage\Verify\VerifyCollection.php');
include(__DIR__ . '\AdvancedUsage\Verify\VerifyDigital.php');
include(__DIR__ . '\AdvancedUsage\Verify\VerifyQRCode.php');
include(__DIR__ . '\AdvancedUsage\Verify\VerifyText.php');
include(__DIR__ . '\AdvancedUsage\Update\UpdateBarcode.php');
include(__DIR__ . '\AdvancedUsage\Update\UpdateQRCode.php');
include(__DIR__ . '\AdvancedUsage\Delete\DeleteBarcode.php');
include(__DIR__ . '\AdvancedUsage\Delete\DeleteQRCode.php');

// Uploading sample files into storage
Utils::UploadResources();

// Basic usage Examples

GetSupportedFormats::Run();
GetDocumentInformation::Run();
GetDocumentPreview::Run();
GetSupportedBarcodes::Run();
GetSupportedQRCodes::Run();
GetDiscUsage::Run();
GetFileVersions::Run();
ObjectExists::Run();
StorageExist::Run();

// Advanced usage Examples

BarcodeSignature::Run();
CollectionSignature::Run();
DigitalSignature::Run();
ImageSignature::Run();
QRCodeSignature::Run();
StampSignature::Run();
TextSignature::Run();

SearchBarcode::Run();
SearchCollection::Run();
SearchDigital::Run();
SearchQRCode::Run();

VerifyBarcode::Run();
VerifyCollection::Run();
VerifyDigital::Run();
VerifyQRCode::Run();
VerifyText::Run();

UpdateBarcode::Run();
UpdateQRCode::Run();

DeleteBarcode::Run();
DeleteQRCode::Run();
