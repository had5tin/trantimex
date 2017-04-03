var $ = jQuery.noConflict();
$('#partner-chosen').on('click', '.dashicons-no', function () {
    $(this).parent('li').remove();
});
function fileChoose(func, target) {
    var finder = wp.media({
        title: "Select Image",
        button: {text: "Select"},
        multiple: true
    });
    finder.on('select', function () {
        var attachments = finder.state().get('selection').toJSON();
        func(attachments, target);
    });
    finder.open();
}

function toField(attachments, target) {
    $('#' + target).val(attachments[0].url);
}

function toHtml(atts, target) {
    var html = '';
    for (var i = 0; i < atts.length; i++) {
        html += '<li img-id="' + i + '"><input type="hidden" name="input[partner][]" value="' + atts[i].id + '"><img src="' + atts[i].url + '"><span class="dashicons dashicons-no"></span></li>';
    }
    $('#' + target).append(html);
}