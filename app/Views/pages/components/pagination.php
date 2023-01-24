<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <?= $this->include('components/header') ?>

    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Pagination</h4>
                    </div>
                    <div class="card-body">
                        <p>Pagination with active item</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Pagination with Icon</h4>
                    </div>
                    <div class="card-body">
                        <p>Change prev and next button into icon</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Pagination Color </h4>
                    </div>
                    <div class="card-body">
                        <p>To add pagination with different color options, use class <code>.pagination-{colorName}</code>
                            with <code>.pagination</code> class.</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-danger">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dark">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-success">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Pagination Size</h4>
                    </div>
                    <div class="card-body">
                        <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or
                            <code>.pagination-sm</code> for additional sizes.
                        </p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary pagination-lg">
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Alignment</h4>
            </div>
            <div class="card-body">
                <p>Change the alignment of pagination components with flexbox utilities.</p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-primary">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-primary  justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-primary  justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
