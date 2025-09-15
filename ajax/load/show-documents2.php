<?php  
	session_start();
	include 'init.php';

	/** @var \Aluma\Util\Config $config */
	use Aluma\Util\PhpInputGet;

	$downloader = new Aluma\Util\Files\Downloader();
	$downloader->setRequestUrl($config->filesRequestUrl);
	$downloader->setDownloadUrl($config->filesRetrieveUrl);
	$downloader->setDirectory($config->filesDownloadDir);

	$DOCS = Aluma\Datax\Docm\SoAck::instance();
	$ordn = PhpInputGet::get('ordn');
	$documents = $DOCS->getDocuments(str_pad($ordn, 10, "0", STR_PAD_LEFT));

	foreach ($documents as $document) {
		$downloader->requestFile($document['DoccFolder'], $document['DociFileName']);
		$downloader->download($document['DociFileName']);
	}
	
?>
<div>
	<h2>Documents for Order #<?php echo $ordn; ?></h2>
    <div class="document-response"></div>
	<table class="sortable_table tablesorter">
    	<thead>
        	<th class="sortable_table_header">Date</th>
            <th class="sortable_table_header">Document</th>
        </thead>
		<?php foreach ($documents as $document) : ?>
                <tbody>
                    <td><?= date('m/d/Y', strtotime($document['DociDate'])); ?></td> 
                    <td>
						<a href="/docs/<?= $document['DociFileName']; ?>" target="_blank" >
							Sales Order Acknowledgment
						</a>
					</td>
                </tbody>
        <?php endforeach; ?>	
	</table>
</div>