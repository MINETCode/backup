$("#depts .card").click(function() {

    var department = $(this).find("p").text();

    $("#depts .card").removeClass("selected");
    $(this).addClass("selected");
    $('form strong').text(department);
    $('form input[name="department"]').val(department);

});

$("select, input, textarea").click(function() {

    if ($(".selected").length == 0) {

        $('form strong').text("N/A");

    }

});

// $("#depts .card").click(function() {

//     $("select[name='primary'] option").attr("disabled", "true");
//     $("select[name='primary']").val("1");
//     $("select[name='secondary'] option").attr("disabled", "true");
//     $("select[name='secondary']").val("1");

//     $(".selected").each(function() {

//         var department = $(this).find("p").text();

//         $("select[name='primary'] option").each(function() {

//             var text = $(this).text();

//             if (text == department) {

//                 $(this).removeAttr("disabled");

//             }

//         });

//         $("select[name='secondary'] option").each(function() {

//             var text = $(this).text();

//             if (text == department) {

//                 $(this).removeAttr("disabled");

//             }

//         });

//     });

// });

// $("select[name='primary']").click(function() {

//     $("select[name='secondary'] option").attr("disabled", "true");
//     $("select[name='secondary']").val("1");

//     if ($(".selected").length == 1) {

//         $("select[name='secondary'] option:last-of-type").removeAttr("disabled");

//     } else {

//         $("select[name='secondary'] option:last-of-type").attr("disabled", true);

//     }

//     $(".selected").each(function() {

//         var department = $(this).find("p").text();

//         $("select[name='secondary'] option").each(function() {

//             var text = $(this).text();

//             if (text == department) {

//                 $(this).removeAttr("disabled");

//             }

//         });

//     });

//     var selected = $("select[name='primary'] option:selected").text();

//     $("select[name='secondary'] option").each(function() {

//         var text = $(this).text();

//         if (text == selected) {

//             $(this).attr("disabled", "true");

//         }

//     });

// });

$('form').on('submit', function(e) {

    var form = $("#apply");
    var resultMessage = $(".result");

    e.preventDefault();

    var proceed = false;

    $(form).find('select').each(function() {

        var val = $(this).val();
        if (val == null) {
           
            $(this).css('border', '1px solid red');

        } else {

            $(this).css('border', '1px solid #D1D1D1');

        }

    });

    if ($('select[name="grade"]').val() != null &&
        $('select[name="section"]').val() != null &&
        $(".selected").length > 0 &&
        $('form strong').text() != "" &&
        $('form strong').text() != "N/A" &&
        $('input[name="department"]').val() != null) {

        proceed = true;

    }

    if (proceed) {

        var applicationData = $(form).serialize();

        $.ajax({

            type: 'POST',
            url: $(form).attr("action"),
            data: applicationData,

        })

        .done(function(response) {

            $("#apply p, #apply select, #apply input, #apply textarea").hide();
            $("#depts").hide();
            $("#masthead .container p:last-of-type").hide();
            $(resultMessage).show();
            $(resultMessage).removeClass("error");
            $(resultMessage).addClass("success");
            $("#depts .card").removeClass("selected");

            $(resultMessage).text(response);

            $('input[type=text]').val('');
            $('input[type=email]').val('');
            $('textarea').val('');

        })

        .fail(function(data) {

            $("#apply p, #apply select, #apply input, #apply textarea").hide()
            $("#depts").hide();
            $(resultMessage).show();
            $(resultMessage).removeClass("success");
            $(resultMessage).addClass("error");
            $("#depts .card").removeClass("selected");

            if (data.responseText != '') {

                $(resultMessage).text(data.responseText);

            } else {

                $(resultMessage).text('Oops! An error occurred.');

            }

        });

    }

});