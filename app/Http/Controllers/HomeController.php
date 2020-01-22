<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

class HomeController extends Controller
{
    public function index()
    {
        $client = new S3Client([
            'credentials' => [
                'key'    => '',
                'secret' => '',
            ],
            'region' => 'us-east-2',
            'version' => 'latest',
        ]);

        $adapter = new AwsS3Adapter($client, 'dev-local-s3fs');

        $filesystem = new Filesystem($adapter);
        return view('home', [
            'contents' => $filesystem->listContents()
        ]);
    }
}
