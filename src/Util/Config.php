<?php namespace Aluma\Util;

/**
 * @property string $filesRetrieveUrl
 * @property string $filesRequestUrl
 * @property string $filesDownloadDir
 * @property string $filesDownloadUrl
 */
class Config extends Data {
    public function __construct() {
        $this->filesRequestUrl = '';
        $this->filesRetrieveUrl = '';
        $this->filesDownloadDir = '/tmp/';
        $this->filesDownloadUrl = '';
    }
}