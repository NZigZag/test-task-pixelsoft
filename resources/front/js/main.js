(function ($) {

        $(".msg-close").on("click", function (e) {
            e.preventDefault();
            let $this = $(this);
            $this.parents('.wrapper-msg-page').remove();
        });

        $('#select-sort-order').on('change', function (e) {
            $(this).closest('form').submit();
        });

})(jQuery);
