<?php
$navs = (new \App\Services\View\HeaderService)->getNavigations();
?>

<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?= end($navs)?->name ?? '' ?></h3>
            <p class="text-subtitle text-muted"><?= $subtitle ?? '' ?></p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <?php
                        foreach($navs as $nav):
                            $active = !($nav->name == end($navs)->name) ? null : 'active';
                    ?>
                    <li class="breadcrumb-item <?= $active ?>">
                        <?php if(!$active): ?>
                            <a href="<?= $nav->url ?>"><?= $nav->name ?></a>
                        <?php else: ?>
                            <?= $nav->name ?>
                        <?php endif ?>
                    </li>
                    <?php endforeach ?>
                </ol>
            </nav>
        </div>
    </div>
</div>
