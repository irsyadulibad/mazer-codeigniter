<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mazer CodeIgniter' ?></title>
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/app-dark.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('images/logo/favicon.svg') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('images/logo/favicon.png') ?>" type="image/png">

    <?= $this->renderSection('style') ?>
</head>
<body>
    <script src="<?= asset('js/initTheme.js') ?>"></script>
    <div id="app">
        <div id="sidebar" class="active">
            <?= $this->include('layouts/sidebar') ?>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <?= $this->renderSection('content') ?>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?= $this->include('layouts/scripts') ?>
</body>
</html>
