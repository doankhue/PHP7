<?php  
    require('vendor/autoload.php');

    $client = new Google_Client();
    // Get your credentials from the console
    $client->setClientId('560236003933-9ousoug4t75hgaheuqc1kl31b5e402sh.apps.googleusercontent.com');
    $client->setClientSecret('dsarW1vEY1hCDlxzR99nSp9f');
    $client->setRedirectUri('http://lacolhost.com/PHP7/GoogleDrive');
    $client->setScopes(array('https://www.googleapis.com/auth/drive.file'));

    session_start();

    if (isset($_GET['code']) || (isset($_SESSION['access_token']) && $_SESSION['access_token'])) {
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
        } else
            $client->setAccessToken($_SESSION['access_token']);

        $service = new Google_Service_Drive($client);

        //Insert a file
        $file = new Google_Service_Drive_DriveFile();
        $file->setName(uniqid().'.jpg');
        $file->setDescription('A test document');
        $file->setMimeType('image/jpeg');

        $data = file_get_contents('a.jpg');

        $createdFile = $service->files->create($file, array(
              'data' => $data,
              'mimeType' => 'image/jpeg',
              'uploadType' => 'multipart'
            ));
        echo "<pre>";
        print_r($createdFile);
        echo "</pre>";


    } else {
        $authUrl = $client->createAuthUrl();
        header('Location: ' . $authUrl);
        exit();
    }






// success
/*
    Google_Service_Drive_DriveFile Object
    (
        [collection_key:protected] => spaces
        [appProperties] => 
        [capabilitiesType:protected] => Google_Service_Drive_DriveFileCapabilities
        [capabilitiesDataType:protected] => 
        [contentHintsType:protected] => Google_Service_Drive_DriveFileContentHints
        [contentHintsDataType:protected] => 
        [copyRequiresWriterPermission] => 
        [createdTime] => 
        [description] => 
        [driveId] => 
        [explicitlyTrashed] => 
        [exportLinks] => 
        [fileExtension] => 
        [folderColorRgb] => 
        [fullFileExtension] => 
        [hasAugmentedPermissions] => 
        [hasThumbnail] => 
        [headRevisionId] => 
        [iconLink] => 
    ****    [id] => 1t9-gcxO7IGjSlSiZBK5klyEHfn2Cm7eR
        [imageMediaMetadataType:protected] => Google_Service_Drive_DriveFileImageMediaMetadata
        [imageMediaMetadataDataType:protected] => 
        [isAppAuthorized] => 
        [kind] => drive#file
        [lastModifyingUserType:protected] => Google_Service_Drive_User
        [lastModifyingUserDataType:protected] => 
        [md5Checksum] => 
        [mimeType] => image/jpeg
        [modifiedByMe] => 
        [modifiedByMeTime] => 
        [modifiedTime] => 
        [name] => 5d27eea40e401.jpg
        [originalFilename] => 
        [ownedByMe] => 
        [ownersType:protected] => Google_Service_Drive_User
        [ownersDataType:protected] => array
        [parents] => 
        [permissionIds] => 
        [permissionsType:protected] => Google_Service_Drive_Permission
        [permissionsDataType:protected] => array
        [properties] => 
        [quotaBytesUsed] => 
        [shared] => 
        [sharedWithMeTime] => 
        [sharingUserType:protected] => Google_Service_Drive_User
        [sharingUserDataType:protected] => 
        [size] => 
        [spaces] => 
        [starred] => 
        [teamDriveId] => 
        [thumbnailLink] => 
        [thumbnailVersion] => 
        [trashed] => 
        [trashedTime] => 
        [trashingUserType:protected] => Google_Service_Drive_User
        [trashingUserDataType:protected] => 
        [version] => 
        [videoMediaMetadataType:protected] => Google_Service_Drive_DriveFileVideoMediaMetadata
        [videoMediaMetadataDataType:protected] => 
        [viewedByMe] => 
        [viewedByMeTime] => 
        [viewersCanCopyContent] => 
        [webContentLink] => 
        [webViewLink] => 
        [writersCanShare] => 
        [internal_gapi_mappings:protected] => Array
            (
            )

        [modelData:protected] => Array
            (
            )

        [processed:protected] => Array
            (
            )

    )
*/