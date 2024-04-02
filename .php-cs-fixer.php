<?php

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__ .'/App', __DIR__ .'/tests', __DIR__ . '/bin'])
    ->name('*.php');


$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'full_opening_tag' => true,
    'no_closing_tag' => true,
])
    ->setFinder($finder);
