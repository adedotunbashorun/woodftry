<div class="block-header">
    <h2></h2>
    <div class="pull-right">
        <span class="text-primary glyphicon glyphicon-calendar">
        <?php
            $Today = date('y:m:d');
            $new = date('l, F d, Y', strtotime($Today));
            echo $new;
        ?>
        </span>
    </div>
</div>