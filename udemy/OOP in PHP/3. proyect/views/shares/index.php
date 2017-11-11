<?php if(isset($_SESSION['is_logged_in'])): ?>
<div class="center">
    <a class="btn-success waves-light blue" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
<?php endif; ?>
    <?php
        foreach($viewmodel as $item):
            echo $item['id_products'].'<br/>';
        endforeach;
    ?>
</div>