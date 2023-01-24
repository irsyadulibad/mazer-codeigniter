<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <?= $this->include('components/header') ?>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Default</h4>
                    </div>
                    <div class="card-body">
                        <p>You can use default divider with <code>{{ "<hr>" | escape }}</code><code>
                                <hr>
                            </code></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum numquam
                            reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut natus,
                            distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
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
                        <h4 class="card-title">Divider with Text</h4>
                    </div>
                    <div class="card-body">
                        <p>Use <code>.divider-text</code> and wrapped by <code>.divider</code> to create a divider text
                        </p>
                        <div class="divider">
                            <div class="divider-text">Hello there!</div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum numquam
                            reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut natus,
                            distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
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
                        <h4 class="card-title">Divider Position</h4>
                    </div>
                    <div class="card-body">
                        <p>Use <code>.divider-{left|left-center|right-center|right}</code> and with
                            <code>.divider</code> to change the text position
                        </p>
                        <div class="divider divider-left">
                            <div class="divider-text">Left</div>
                        </div>
                        <div class="divider divider-left-center">
                            <div class="divider-text">Left Center</div>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Center</div>
                        </div>
                        <div class="divider divider-right-center">
                            <div class="divider-text">Right Center</div>
                        </div>
                        <div class="divider divider-right">
                            <div class="divider-text">Right</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
