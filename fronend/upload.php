<?php

use Psr\Http\Message\UploadedFileInterface;
use Zend\Diactoros\ServerRequestFactory;

$request = ServerRequestFactory::fromGlobals();

if ($request->getMethod() !== 'POST') {
    http_response_code(405);
    exit('Use POST method.');
}

$uploaded_files = $request->getUploadedFiles();

if (
    !isset($uploaded_files['files']['x']['y']['z']) ||
    !$uploaded_files['files']['x']['y']['z'] instanceof UploadedFileInterface
) {
    http_response_code(400);
    exit('Invalid request body.');
}

$file = $uploaded_files['files']['x']['y']['z'];

if ($file->getError() !== UPLOAD_ERR_OK) {
    http_response_code(400);
    exit('File uploading failed.');
}

$file->moveTo('/path/to/new/file');

?>