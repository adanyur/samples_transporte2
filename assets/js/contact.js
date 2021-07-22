$(document).ready(function () {
  (function ($) {
    "use strict";

    jQuery.validator.addMethod(
      "answercheck",
      function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
      },
      "type the correct answer -_-"
    );

    // validate contactForm form
    $(function () {
      $("#contactForm").validate({
        rules: {
          name: {
            required: true,
            minlength: 2,
          },
          subject: {
            required: true,
            minlength: 4,
          },
          number: {
            required: true,
            minlength: 5,
          },
          email: {
            required: true,
            email: true,
          },
          message: {
            required: true,
            minlength: 20,
          },
        },
        messages: {
          name: {
            required: "come on, you have a name, don't you?",
            minlength: "your name must consist of at least 2 characters",
          },
          subject: {
            required: "come on, you have a subject, don't you?",
            minlength: "your subject must consist of at least 4 characters",
          },
          number: {
            required: "come on, you have a number, don't you?",
            minlength: "your Number must consist of at least 5 characters",
          },
          email: {
            required: "no email, no message",
          },
          message: {
            required:
              "um...yea, you have to write something to send this form.",
            minlength: "thats all? really?",
          },
        },
        submitHandler: function (form) {
          $(form).ajaxSubmit({
            type: "POST",
            data: $(form).serialize(),
            url: "php/contact.php",
            success: function () {
              $("#contactForm :input").attr("disabled", "disabled");
              $("#contactForm").fadeTo("slow", 1, function () {
                $(this).find(":input").attr("disabled", "disabled");
                $(this).find("label").css("cursor", "default");
                $("#success").fadeIn();
                $(".modal").modal("hide");
                $("#success").modal("show");
              });
            },
            error: function () {
              $("#contactForm").fadeTo("slow", 1, function () {
                $("#error").fadeIn();
                $(".modal").modal("hide");
                $("#error").modal("show");
              });
            },
          });
        },
      });
    });
  })(jQuery);
});

document.getElementById("btnSend").addEventListener("click", (e) => {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let number = document.getElementById("number").value;
  let select1 = document.getElementById("select1").value;
  let cityDepartament = document.getElementById("cityDepartament").value;
  let contents = document.getElementById("contents").value;
  let weight = document.getElementById("weight").value;
  let height = document.getElementById("height").value;
  let width = document.getElementById("width").value;
  let long = document.getElementById("long").value;
  let imagen = document.getElementById("upload__image").files[0];
  let service = document.querySelector('input[name="radio"]:checked').value;

  form = new FormData();
  form.append("name", name);
  form.append("email", email);
  form.append("number", number);
  form.append("select1", select1);
  form.append("cityDepartament", cityDepartament);
  form.append("contents", contents);
  form.append("weight", weight);
  form.append("height", height);
  form.append("width", width);
  form.append("long", long);
  form.append("imagen", imagen);
  form.append("services", service);

  $.ajax({
    url: "php/price.php",
    type: "POST",
    data: form,
    contentType: false,
    cache: false,
    processData: false,
    success: (data) => {
      console.log(data);
    },
  });

  e.preventDefault();
});
