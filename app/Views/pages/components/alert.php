<?= $this->extend('layouts/app') ?>
<?= $this->subtitle = 'A pretty helpful component to show emphasized information to the user.' ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <?= $this->include('components/header') ?>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Default</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">This is primary alert.</div>
                        <div class="alert alert-success">This is success alert.</div>
                        <div class="alert alert-warning">This is warning alert.</div>
                        <div class="alert alert-danger">This is danger alert.</div>
                        <div class="alert alert-dark">This is dark alert.</div>
                        <div class="alert alert-secondary">This is secondary alert.</div>
                        <div class="alert alert-light">This is light alert.</div>
                        <div class="alert alert-info">This is info alert.</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>With Icon</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary"><i class="bi bi-star"></i> This is primary alert.</div>
                        <div class="alert alert-success"><i class="bi bi-check-circle"></i> This is success alert.</div>
                        <div class="alert alert-warning"><i class="bi bi-exclamation-triangle"></i> This is warning
                            alert.</div>
                        <div class="alert alert-danger"><i class="bi bi-file-excel"></i> This is danger alert.</div>
                        <div class="alert alert-secondary"><i class="bi bi-star"></i> This is secondary alert.</div>
                        <div class="alert alert-info"><i class="bi bi-star"></i> This is info alert.</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Light</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-primary color-primary"><i class="bi bi-star"></i> This is primary
                            alert.</div>
                        <div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> This is
                            success alert.</div>
                        <div class="alert alert-light-warning color-warning"><i class="bi bi-exclamation-triangle"></i>
                            This is warning alert.</div>
                        <div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i> This
                            is danger alert.</div>
                        <div class="alert alert-light-secondary color-secondary"><i class="bi bi-star"></i> This is
                            secondary alert.</div>
                        <div class="alert alert-light-info color-info"><i class="bi bi-star"></i> This is info alert.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Heading</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <h4 class="alert-heading">Primary</h4>
                            <p>This is a primary alert.</p>
                        </div>
                        <div class="alert alert-secondary">
                            <h4 class="alert-heading">Secondary</h4>
                            <p>This is a secondary alert.</p>
                        </div>
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Success</h4>
                            <p>This is a success alert.</p>
                        </div>
                        <div class="alert alert-danger">
                            <h4 class="alert-heading">Danger</h4>
                            <p>This is a danger alert.</p>
                        </div>
                        <div class="alert alert-warning">
                            <h4 class="alert-heading">Warning</h4>
                            <p>This is a warning alert.</p>
                        </div>
                        <div class="alert alert-info">
                            <h4 class="alert-heading">Info</h4>
                            <p>This is a info alert.</p>
                        </div>
                        <div class="alert alert-light">
                            <h4 class="alert-heading">Light</h4>
                            <p>This is a light alert.</p>
                        </div>
                        <div class="alert alert-dark">
                            <h4 class="alert-heading">Dark</h4>
                            <p>This is a dark alert.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Dismissable</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            This is primary alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible show fade">
                            This is a secondary alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible show fade">
                            This is a success alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible show fade">
                            This is a danger alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info alert-dismissible show fade">
                            This is a info alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light alert-dismissible show fade">
                            This is a light alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark alert-dismissible show fade">
                            This is a dark alert.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
