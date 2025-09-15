<?php namespace Aluma\Util\Files;
// Base PHP
use Exception;
// Aluma
use Aluma\Util\Data;

/**
 * Download files from server
 * 
 * @property string $requestUrl  Base URL to make file Requests to
 * @property string $downloadUrl Base URL to download files from
 * @property string $filesUrl	 Base URL to deliver files from
 * @property string $directory	 Directory to download files into
 */
class Downloader extends Data {
	private $requestUrl;
	private $downloadUrl;
	private $filesUrl;
	private $directory;

	/**
	 * Set Request URL
	 * @param string $url
	 */
	public function setRequestUrl($url) {
		$this->requestUrl = $url;
	}

	/**
	 * Set Download URL
	 * @param string $url
	 */
	public function setDownloadUrl($url) {
		$this->downloadUrl = $url;
	}

	/**
	 * Set Files URL
	 * @param string $url
	 */
	public function setFilesUrl($url) {
		$this->filesUrl = $url;
	}

	/**
	 * Set File Directory for Download files
	 * @param string $dir
	 */
	public function setDirectory($dir) {
		$this->directory = rtrim($dir, '/') . '/';
	}

	/**
	 * Return URL to downloaded File
	 * @return string
	 */
	public function fileUrl($filename) {
		return rtrim($this->filesUrl, '/') . '/' . $filename;
	}

	public function filepath($filename) {
		return $this->directory . $filename;
	}

	/**
	 * Request File from External Server
	 */
	public function requestFile(string $folder, $filename) {
		$curl = curl_init();

		$fields = ['folder' => $folder, 'file' => $filename];

		$url = $this->requestUrl . '?' . http_build_query($fields);

		// Set the options
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_FOLLOWLOCATION,TRUE);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

		curl_setopt($curl, CURLINFO_HEADER_OUT, true);

		if (sizeof($fields) > 0) {
			// This sets the number of fields to post
			curl_setopt($curl,CURLOPT_POST, sizeof($fields));

			// This is the fields to post in the form of an array.
			curl_setopt($curl,CURLOPT_POSTFIELDS, http_build_query($fields));
		}
		//execute the post
		$result = curl_exec($curl);
		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		//close the connection
		curl_close($curl);
		return $httpCode == 200;
	}

	/**
	 * Download File into Dowloads Directory
	 * @return bool
	 */
	public function download($filename) {
		$file = false;

		$url = $this->downloadUrl . $filename;
		$filepath = $this->directory . $filename;
	
		try {
			$file = file_put_contents($filepath, fopen($url, 'r'));
		} catch (Exception $e) {
			return false;
		}
		return file_exists($filepath);
	}
}