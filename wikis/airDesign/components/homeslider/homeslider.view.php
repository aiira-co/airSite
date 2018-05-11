<div class="ad-slide-group is-loading"  effect="slideLeft" duration="10" style="height:350px">

<div class="ad-spinner "></div>

<?php foreach($data as $row){ ?>
    <div class="ad-slide">
        <div class="ad-card ad-flat " style="">
        <h2 class="title ad-spread <?=$row->titleColor;?>">
                     <?=$row->title;?>
          </h2>
            <p class="ad-center " style="margin-top:16px;">
            <?=$row->description;?>
            </p>

            <a href="<?=$row->link;?>" target="_blank" class="ad-btn ad-flat <?=$row->buttonShape;?> ad-md btn-<?=$row->buttonColor;?> ad-spread">
            <?=$row->buttonText;?>
            </a>
        </div>
    </div>
<?php } ?>
</div>