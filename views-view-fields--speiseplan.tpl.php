<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$title          = $fields['text']->content;
$description    = $fields['text_1']->content;
$category       = $fields['text_2']->content;
$preis_studi    = $fields['text_3']->content;
$preis_normal   = $fields['text_4']->content;
$icons          = $fields['text_5']->content;
$allergen       = $fields['text_6']->content;
$gesetzl        = $fields['text_7']->content;

?>

<dl>
    <dt>
        <?php print $category; ?> 
        <?php if ($preis_studi | $preis_normal): ?> <span class="t-right"><?php print $preis_studi ?> | <?php print $preis_normal ?></span><?php endif; ?>
    </dt>
    <dd>
        <span><?php print $title; ?> <?php if ($description) { print $description; } ?></span>
        <sup class="<?php if($icons == 'V' | 'Vg'): ?>icon icon-veggie<?php endif; ?>"> <?php if ($gesetzl): print $gesetzl; ?>,<?php endif; print $icons; ?></sup>
    </dd>
</dl>



