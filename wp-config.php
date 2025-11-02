<?php

if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) {
    include __DIR__ . '/wp-config-local.php';
} else {
    include __DIR__ . '/wp-config-production.php';
}
