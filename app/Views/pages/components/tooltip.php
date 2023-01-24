<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <?= $this->include('components/header') ?>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Tooltip</h5>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                            Tooltip on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                            Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                            Tooltip on left
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tooltip in Text</h5>
                    </div>
                    <div class="card-body">
                        Tight pants next level keffiyeh <a href="#" data-bs-toggle="tooltip" title="Some tooltip text!">you probably</a> haven't heard of them. Photo booth beard raw
                        denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie
                        sustainable quinoa 8-bit american apparel <a href="#" data-bs-toggle="tooltip" title="Another tooltip text!">have a</a> terry richardson vinyl chambray. Beard stumptown,
                        cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's
                        cleanse vegan chambray. A really ironic artisan <a href="#" data-bs-toggle="tooltip" title="Another here too!">whatever keytar</a>, scenester farm-to-table banksy Austin twitter
                        handle freegan cred raw denim single-origin coffee viral.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    // If you want to use tooltips in your project, we suggest initializing them globally
    // instead of a "per-page" level.
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    }, false);
</script>
<?= $this->endSection() ?>
