
function custom_menu_page() {
    add_menu_page(
        'Form Page',
        'Form Menu',
        'edit_post',
        'form-menu',    
        'form_menu_callback', 
        'dashicons-admin-generic'
    );
}


add_action('admin_menu', 'custom_menu_page');


function form_menu_callback() {
    echo '<div class="wrap">';
    echo '<h1>Form Menu Page</h1>';
    echo '<p>Pesan!</p>';
    <p> <?php echo $email['email'];?></p>
    echo '</div>';
}
