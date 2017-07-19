/**
 * Created by medna on 27/03/2017.
 */
function uniqeId() {
    return Math.round(new Date().getTime() + (Math.random() * 100));
}
jQuery(document).ready(function () {
    $('.note-editor [data-event="insertUnorderedList"]').tooltip('disable');
});