<aside class="c-subnav">
    <header class="c-subnav__header">
        <h4>
            In this section
        </h4>
    </header>
    <div class="c-subnav__body">

<?php 
    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2');
    if ($children) {
        ?>                   
        <ul class="c-subnav__list">                   
        <?php echo $children; ?>                   
        </ul>                   
        <?php
    } //ends (if($children)//
    elseif ($post->post_parent) { //if no children, try to get parent page and show siblings pages including the page itself
        $siblings = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0&depth=1');
        if ($siblings) {
            ?>                   
              <ul class="c-subnav__list">                   
            <?php echo $siblings; ?>                   
            </ul> 
    <?php
        } //ends if($siblings)//?>                  
        <?php
    } else { //optional: if no children and if no parent, then show all top level pages
        $pagelist = wp_list_pages('title_li=&echo=0&depth=1');
        if ($pagelist) {
            ?>                   
                <ul class="c-subnav__list">                   
                <?php echo $pagelist; ?>                   
                </ul>
    <?php
        } //ends if($pagelist)//?>
    <?php
    } ?>
    </div>
</aside>