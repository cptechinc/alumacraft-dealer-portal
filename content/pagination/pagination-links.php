<p class="link" style="margin:10px 0;" >
    <a href="<?php echo $pagination_link.(1).$link_add; ?>">First</a> 
    <?php for ($i = ($this_page - 3); $i <= ($this_page + 3); $i++) : ?>
        <?php if ($i > 0 && $i <= $total_pages) : ?>
            <?php if ($this_page == $i) : ?>
                [<?php echo $i; ?>]
            <?php else : ?>
                <a href="<?php echo $pagination_link.$i.$link_add; ?>">[<?php echo $i; ?>]</a>  
            <?php endif; ?>
        <?php endif; ?>
    <?php endfor; ?>
     <a href="<?php echo $pagination_link.($this_page + 1).$link_add; ?>">Next</a>  
     <a href="<?php echo $pagination_link.($total_pages).$link_add; ?>">Last</a>  
</p>