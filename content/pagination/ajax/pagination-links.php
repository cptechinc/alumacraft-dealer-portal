<p class="link" style="margin:10px 0;" >
    <a href="<?php echo $pagination_link.(1); ?>" class="paginate-link" data-subset="<?php echo $subset; ?>">First</a> 
    <?php for ($i = ($this_page - 3); $i <= ($this_page + 3); $i++) : ?>
        <?php if ($i > 0 && $i <= $total_pages) : ?>
            <?php if ($this_page == $i) : ?>
               <span class="thispage">[<?php echo $i; ?>]</span> 
            <?php else : ?>
                <a href="<?php echo $pagination_link.$i; ?>" class="paginate-link" data-subset="<?php echo $subset; ?>">[<?php echo $i; ?>]</a>  
            <?php endif; ?>
        <?php endif; ?>
    <?php endfor; ?>
     <a href="<?php echo $pagination_link.($this_page + 1); ?>" class="paginate-link" data-subset="<?php echo $subset; ?>">Next</a>  
     <a href="<?php echo $pagination_link.($total_pages); ?>" class="paginate-link" data-subset="<?php echo $subset; ?>">Last</a>  
</p>