<?php  
	session_start();
	include 'includes.php';
	$ordn = $_GET['ordn'];
	//$documents = get_most_recent_docs(session_id(), str_pad($ordn, 10, "0", STR_PAD_LEFT), false);
	$documents = get_sales_acknowledgements(session_id(), str_pad($ordn, 10, "0", STR_PAD_LEFT), false);
?>
<div>
	<h2>Documents for Order #<?php echo $ordn; ?></h2>
    <div class="document-response"></div>
	<table class="sortable_table tablesorter">
    	<thead>
        	<th class="sortable_table_header">Date</th>
            <th class="sortable_table_header">Document</th>
        </thead>
		<?php foreach ($documents->fetchAll(PDO::FETCH_ASSOC) as $document) : ?>
                <tbody>
                    <td><?php echo $document['createdate']; ?></td> 
                    <?php if (strpos($document['pathname'], 'SOACK') !== false && ($role_type == "DEALER")) : ?>
                    	<td><a href="/docs/<?php echo $document['pathname']; ?>" target="_blank" id="selected" class="so-ack" data-docname="<?php echo $document['pathname']; ?>" data-ordn="<?php echo $ordn; ?>"><?php echo $document['title']; ?></a></td>
                    <?php else : ?>
                    	<td><a href="/docs/<?php echo $document['pathname']; ?>" target="_blank" ><?php echo $document['title']; ?></a></td>
                    <?php endif; ?>
                </tbody>
  
        <?php endforeach; ?>
        	
	</table>
</div>