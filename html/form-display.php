<?php
function display_manage_cpt_page() {
    // Check for message in query string
    if (isset($_GET['message'])) {
        if ($_GET['message'] == 'removed') {
            echo '<div class="updated"><p>Custom post type removed.</p></div>';
        } elseif ($_GET['message'] == 'registered') {
            echo '<div class="updated"><p>New custom post type registered.</p></div>';
        }
    }
    ?>
    <div class="wrap">
        <h2>Manage Custom Post Types</h2>
        <form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
            <input type="hidden" name="action" value="register_cpt">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Add or Remove<br>Custom Post Type:</th>
                    <td><input type="text" name="new_cpt" value="" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}