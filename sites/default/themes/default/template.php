<?php
function default_preprocess_page(&$variables) {
    $custom_template_files = array();

    $alias = drupal_get_path_alias($_GET['q']);
    if ($alias != $_GET['q']) :
        $template_filename = 'page';
        foreach (explode('/', $alias) as $path_part) :
            $template_filename = $template_filename . '-' . $path_part;
            $custom_template_files[] = $template_filename;
        endforeach;
    endif;

	if ($variables['node']->type != ""):
        $custom_template_files[] = "page-" . $variables['node']->type;
    endif;

    i/*f (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) :
        $vid = db_result(db_query("SELECT vid FROM {term_data} WHERE tid = '%d'", arg(2)));
        if ($vid == 3) $custom_template_files[] = 'page-';
    endif;*/
	
    $variables['template_files'] = array_merge($custom_template_files, $variables['template_files']);
}

function default_preprocess_node(&$variables) {
	if ($variables['node']->nid != "") :
        $variables['template_files'][] = 'node-' . $variables['node']->nid;
    endif;

    if (drupal_is_front_page()) :
        $variables['template_files'][] = 'node-front';
    endif;
}

function default_tabs($tabs) {
    $output = '';

    if ($tabs && user_is_logged_in()) :
        $output .= '<div id="tabs-wrapper" class="clear-block">';
        $output .= '<ul class="tabs primary">' . $tabs . '</ul>';
		$output .= '</div>';
    endif;

    return $output;
}

function default_select($element) {
	$select = '';
	$size = $element['#size'] ? ' size="' . $element['#size'] . '"' : '';
	_form_set_class($element, array('form-select'));
	$multiple = $element['#multiple'];

	return theme('form_element', $element, '<div class="select"><div class="select-content"><select name="' . $element['#name'] . '' . ($multiple ? '[]' : '') . '"' . ($multiple ? ' multiple="multiple" ' : '') . drupal_attributes($element['#attributes']) . ' id="' . $element['#id'] . '" ' . $size . '>' . form_select_options($element) . '</select></div></div>');
}
