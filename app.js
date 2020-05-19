$(function () {
    // access the form
    let form = $(".ajax-form");

    // access the message div
    let message = $(".message");

    form.submit((event) => {
        event.preventDefault();

        // Serialize the form data
        let formData = form.serialize();

        // Make an ajax request to do form validation
        $.ajax({
            type: "POST",
            url: "action.php",
            data: formData
        }).done((response) => {
            message.removeClass("alert alert-danger");
            message.addClass("alert alert-success");
            message.text(response);

            // Clear the form
            form.trigger("reset");
        }).fail((response) => {
            message.removeClass("alert alert-success");
            message.addClass("alert alert-danger");
            message.text(response.responseText);
        })
    })
})

