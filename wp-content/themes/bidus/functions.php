<?php
add_action('wpcf7_before_send_mail', 'custom_yacht_booking');
function custom_yacht_booking($contact_form) {
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $data = $submission->get_posted_data();
        // Обработка данных формы и создание заказа в WooCommerce
        $yacht_persons = $data['yacht-persons'];
        $yacht_hours = $data['yacht-hours'];
        $full_name = $data['full-name'];
        $phone_number = $data['phone-number'];

        // Пример создания заказа
        $order = wc_create_order();
        $order->add_product(wc_get_product_id_by_sku('yacht-sku'), 1);
        $order->set_address(array(
            'first_name' => $full_name,
            'phone' => $phone_number
        ), 'billing');
        $order->calculate_totals();
        $order->save();
    }
}


// Добавляем обработчик AJAX-запроса для получения URL изображений яхт
add_action('wp_ajax_get_yacht_images', 'get_yacht_images');
add_action('wp_ajax_nopriv_get_yacht_images', 'get_yacht_images');

function get_yacht_images() {
    // Получаем посты (яхты) с изображениями
    $args = array(
        'post_type'      => 'post', // тип поста с яхтами
        'posts_per_page' => -1, // количество яхт для отображения (-1 для отображения всех)
        // дополнительные параметры запроса, если нужны
    );

    $yachts = get_posts($args);

    // Массив для хранения URL изображений
    $imageUrls = array();

    // Проходимся по каждой яхте и получаем URL изображения
    foreach ($yachts as $yacht) {
        // Получаем ID изображения яхты
        $image_id = get_post_thumbnail_id($yacht->ID);

        // Получаем URL изображения яхты
        $image_url = wp_get_attachment_image_url($image_id, 'full');

        // Добавляем URL изображения в массив
        if ($image_url) {
            $imageUrls[] = $image_url;
        }
    }

    // Отправляем массив URL изображений в формате JSON
    wp_send_json($imageUrls);

    // Обязательно завершаем выполнение скрипта
    wp_die();
}
