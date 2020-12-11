(function ($) {

        const generateMessages = (text, typeMessage) => {
            return `<div class='msg ${typeMessage}'><button type='button' class='msg-close'><i class='fa fa-times'></i></button><p>${text}</p></div>`;
        };

        const generateTbody = (posts) => {
            let tr = [];

            $.each(posts, function(i, item) {
                tr.push("<tr>");
                tr.push("<td class='td-title'>" + item.title + "</td>");
                tr.push("<td class='td-description'>" + item.description + "</td>");
                tr.push("<td class='td-date-publication'>" + item.published_at + "</td>");
                tr.push("</tr>");
            });

            return tr.join("");
        };

        const closeMessage = () => {
            $(document).ready(function () {
                $(".msg-close").on("click", function (e) {
                    e.preventDefault();
                    let $this = $(this);
                    $this.parent().remove();
                });
            });
        };

        closeMessage();

        $(".btn-import-posts").on("click", function (e) {
            e.preventDefault();
            let $thisBtn = $(this);
            $thisBtn.text('').addClass('loading');

            let csrf = $("input[name='_token']").val();
            const request = $.ajax({
                url: '/admin/import',
                dataType: 'json',
                data: { '_token': csrf },
                type: 'post'
            });

            request.done(function(response) {
                const posts = JSON.parse(response.data);
                $('#import-posts-table>tbody').html(generateTbody(posts));
                $('.wrapper-msg-page>.container>.row>div')
                    .html(generateMessages(response.message, response.success ? 'success' : 'error'));
                closeMessage();
                $thisBtn.removeClass('loading').text('Import');
            });

            request.fail(function(response) {
                $('.wrapper-msg-page>.container>.row>div')
                    .html(generateMessages(response.responseJSON.message, response.success ? 'success' : 'error'));
                closeMessage();
                $thisBtn.removeClass('loading').text('Import');
            });
        });

})(jQuery);
