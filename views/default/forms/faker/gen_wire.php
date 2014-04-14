<?php

namespace hypeJunction\Faker;

echo '<div class="elgg-head">';
echo elgg_view_title(elgg_echo('faker:gen_wire'));
echo '</div>';

echo '<div class="elgg-body">';
echo '<div>';
echo '<label>' . elgg_echo('faker:gen_wire:count') . '</label>';
echo elgg_view('input/text', array(
	'name' => 'count',
	'value' => 10,
));
echo '</div>';

echo '<div>';
echo '<label>' . elgg_echo('faker:gen_wire:max_replies') . '</label>';
echo elgg_view('input/text', array(
	'name' => 'max_replies',
	'value' => 10,
));
echo '</div>';

echo '</div>';

echo '<div class="elgg-foot mtm">';
echo elgg_view('input/submit');
echo '</div>';