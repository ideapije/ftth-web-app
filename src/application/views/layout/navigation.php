<?php
$activeClass = $menu ?? 'home';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('/') ?>">
            <?= $name ?? 'Web App' ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($navigation as $key => $value) :  ?>
                    <li class="nav-item <?= ($activeClass === $key) ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url($value['url']) ?>">
                            <?= $value['text'] ?>
                            <?php if (($activeClass === $key)) : ?>
                                <span class="sr-only">(current)</span>
                            <?php endif ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>