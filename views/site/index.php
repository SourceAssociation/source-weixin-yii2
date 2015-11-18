<?php

/* @var $this yii\web\View */

use yii\web\AssetBundle;

$this->title = Yii::t('app', 'WeChat');
?>

<div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid="{gutter: 20}" data-uk-scrollspy="{cls:'uk-animation-slide-bottom uk-invisible', target:'> div > .uk-overlay', delay:200, repeat: true}">
<?php foreach ($wxs as $i => $wx): ?>
    <div class="wx-item">
        <figure class="uk-overlay  uk-overlay-hover uk-scrollspy-init-inview uk-invisible">
            <div class="uk-panel uk-panel-box uk-overlay-scale">
                <h3><?php echo $wx->title;?></h3>
                <p><?php echo $wx->content168;?></p>
            </div>
            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
                <div>
                    <h3><?php echo $wx->date;?></h3>
                    <p><?php echo $wx->title1;?></p>
                    <a class="uk-button uk-button-primary" href="<?php echo $wx->realurl;?>" target="_blank">查看</a>
                </div>
            </figcaption>
        </figure>
    </div>
<?php endforeach ?>
</div>