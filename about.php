<?php

/**
 * 关于
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="main">
    <div class="post" itemprop="articleBody">
        <div class="post-title-wrap">
            <div class="post-title">
                <?php $this->title() ?>
            </div>
        </div>
        
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        
        
    </div>
       
</div>

<?php $this->need('footer.php'); ?>