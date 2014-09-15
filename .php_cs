<?php

$finder = Symfony\CS\Finder\DefaultFinder::create();

/** @var \Symfony\Component\Finder\Finder $finder */
$finder
    ->notName('*.twig')
    ->notName('*.yml')
    ->notName('*.html.twig')
    ->in(
        [
            __DIR__.'/src/',
        ]
    )
;

// Load a local config-file when existing
if (file_exists(__DIR__.'/local.php_cs')) {
    require __DIR__.'/local.php_cs';
}

return Symfony\CS\Config\Config::create()
    ->fixers(
        [
            'encoding',
            'linefeed',
            'indentation',
            'trailing_spaces',
            'object_operator',
            'phpdoc_params',
            'visibility',
            'short_tag',
            'php_closing_tag',
            'return',
            'extra_empty_lines',
            'braces',
            'lowercase_constants',
            'lowercase_keywords',
            'include',
            'function_declaration',
            'controls_spaces',
            'spaces_cast',
            'elseif',
            'eof_ending',
            'one_class_per_file',
            'unused_use',
            'ternary_spaces',
            'short_array_syntax',
            'standardize_not_equal',
            'new_with_braces',
            'ordered_use',
            'default_values',
            'line_after_namespace',
            'multiple_use',
            'concat_without_spaces',
            'operators_spaces',
            'single_array_no_trailing_comma',
            'whitespacy_lines',
            // 'strict',
        ]
    )
    ->finder($finder)
;
