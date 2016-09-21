$(document).ready(function () {
    // place your code here

});
if($('.ipsPlugins a.btn-new').length > 0){
    $('.ipsPlugins a.btn-new').attr('href', 'https://ihub.by/dashboard')
}

if($('._localThemes').length > 0)
{
    $('._localThemes h2').html('Доступные темы <small><a href="https://ihub.by/dashboard2">Найти ещё</a></small>');
}

$( document ).ajaxComplete(function() {
    if($('.ipsModulePluginsContainer').length > 0
        && $('.ipsModulePluginsContainer .ipsProperties .page-header h1').text() == 'iHub'){
        $('.ipsModulePluginsContainer .ipsProperties ._actions').addClass('hide');
    } else {
        $('.ipsModulePluginsContainer .ipsProperties ._actions').removeClass('hide');
    }
});