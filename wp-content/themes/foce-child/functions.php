<?php
// Charger les styles et scripts du parent et de l'enfant
function child_theme_enqueue_assets() {
    // Charger le style principal du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Charger le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    // Charger un fichier CSS dédié pour les animations
    wp_enqueue_style('child-animations', get_stylesheet_directory_uri() . '/animations.css', array('child-style'));

    // Charger les scripts principaux du parent
    wp_enqueue_script('parent-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), null, true);
    wp_enqueue_script('parent-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), null, true);

    // Charger des scripts supplémentaires si nécessaire (thème enfant)
    // Exemple : wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/child-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_assets');

// Synchroniser les options du Customizer entre le parent et l'enfant
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // Empêcher la mise à jour des options du thème enfant
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Charger le fichier de style pour les configurations RTL (si nécessaire)
function load_rtl_stylesheet($uri) {
    if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
        $uri = get_template_directory_uri() . '/rtl.css';
    }
    return $uri;
}
add_filter('locale_stylesheet_uri', 'load_rtl_stylesheet');
