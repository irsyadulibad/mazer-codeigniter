<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <?= $this->include('components/header') ?>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Rating</h4>
                    </div>
                    <div class="card-body">
                        <div id="basic"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">5 Star Rating with Step</h4>
                    </div>
                    <div class="card-body">
                        <div id="step"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Unlimited Number of Stars</h4>
                    </div>
                    <div class="card-body">
                        <div id="unli1"></div>
                        <br>
                        <div id="unli2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= asset('extensions/rater-js/lib/style.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= asset('extensions/rater-js/index.js?v=2"') ?>"></script>
<script src="<?= asset('js/pages/rater-js.js') ?>"></script>
<?= $this->endSection() ?>
