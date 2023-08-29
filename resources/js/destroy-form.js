const forms = document.querySelectorAll(".destroy-form");

forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const is_confirmed = confirm(
            "Sei sicuro di voler cancellare il fumetto?"
        );

        if (is_confirmed) form.submit();
    });
});
