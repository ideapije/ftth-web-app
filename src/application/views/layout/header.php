<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
    $name = $name ?? 'Web App';
    ?>
    <title><?= ($title ?? false) ? "$title | $name" : $name ?></title>
    <meta name="description" content="<?= $description ?? '' ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <style>
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.75) url('/public/images/snail-loader.gif') no-repeat center center;
            z-index: 10000;
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 18px;
            }

            .search-button {
                margin-top: 8px;
            }
        }
    </style>
</head>

<body>