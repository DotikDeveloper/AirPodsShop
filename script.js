jQuery(function($) {

    // reset form
    $('form[name='
        mailForm '] input:reset').click(function() {
        $('form[name='
                mailForm ']')
            .find('text, tel').val('')

        return false;
    });

});