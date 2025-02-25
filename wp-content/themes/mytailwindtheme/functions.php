<?php

function enqueue_vue_scripts() {
    // wp_enqueue_script('vue-js', 'https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js', [], null, true);
    wp_enqueue_script('custom-vue-app', get_template_directory_uri() . '/assets/js/app.js', ['vue-js'], null, true);
    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_vue_scripts');
