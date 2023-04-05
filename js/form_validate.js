// Enable form validation using Bootstrap's built-in functionality
(function () {
  "use strict";

  window.addEventListener(
    "load",
    function () {
      // Get the form
      var form = document.getElementById("throttling-form");

      // Enable form validation
      form.addEventListener(
        "submit",
        function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    },
    false
  );
})();
