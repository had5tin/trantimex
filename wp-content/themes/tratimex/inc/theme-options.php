<?php
wp_enqueue_script('fileChoose-js', get_template_directory_uri() . '/assets/js/fileChoose.js', [], '', true);

$setting = $_POST['setting'];
if ($setting) {
    foreach ($setting as $key => $value) {
        delete_option($key);
        add_option($key, $value);
    }
}
function inputText($name, $slug)
{
    echo '<tr><th><label for="' . $slug . '">' . $name . '</label></th><td><input id="' . $slug . '" name="setting[' . $slug . ']" type="text" class="regular-text"value="' . get_option($slug) . '"></td></tr>';
}

?>

<div class="wrap" id="theme-options-page">
    <h1>Cài Đặt Giao Diện</h1>

    <form action="options-general.php?page=theme-option" method="post">
        <h2>Trang Web</h2>
        <table class="form-table">
            <tr>
                <th><label for="logo">Logo</label></th>
                <td><input type="text" name="setting[logo]" id="logo" value="<?php echo get_option('logo') ?>">
                    <button type="button" onclick="fileChoose(toField, 'logo')">Chọn ảnh</button>
                </td>
            </tr>
        </table>

        <button type="submit" class="button button-primary">Thay Đổi</button>
    </form>
</div>