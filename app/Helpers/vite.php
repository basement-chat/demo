<?php

/**
 * Resolve Vite asset builds.
 */
function vite(string $entry): string
{
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $asset = $manifest[$entry]['file'] ?? $entry;

    return sprintf('/build/%s', ltrim($asset, '/'));
}
