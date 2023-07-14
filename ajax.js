function savesignup() {
  $("#signupform").validate({
    rules: {
      regname: {
        required: true,
        minlength: 4,
      },
      regphone: {
        required: true,
        minlength: 9,
      },
      // regcountry: {
      //   required: true,
      // },
      // regprogram: {
      //   required: true,
      // },
      regpassword: {
        required: true,
        minlength: 6,
        maxlength: 60,
      },
      regpassword2: {
        required: true,
        minlength: 6,
        equalTo: "#regpassword",
      },
      regemail: {
        required: true,
        email: true,
      },
    },
    messages: {
      regname: "<span style='color:red;'>Please enter full name</span>",
      regphone: {
        required: "<span style='color:red;'>Please provide your phone number</span>",
        minlength:
          "<span style='color:red;'>phone no. must have 10 minimum character</span>",
      },
      regpassword: {
        required: "<span style='color:red;'>please provide a password</span>",
        minlength:
          "<span style='color:red;'>password at least have 6 characters</span>",
        maxlength:
          "<span style='color:red;'>password must be 60 character long</span>",
      },
      regpassword2: {
        required: "<span style='color:red;'>Re-Enter Password</span>",
        minlength:
          "<span style='color:red;'>re-enter must have 6 minimum character</span>",
        equalTo: "<span style='color:red;'>password doesn't match !</span>",
      },
      regemail:
        "<span style='color:red;'>please enter a valid email address</span>",
    },
    submitHandler: submitForm,
  });

  /* handle form submit */
  function submitForm() {
    var data = $("#signupform").serialize();
    $.ajax({
      type: "post",
      url: "signupstudent.php",
      data: data,
      beforeSend: function () {
        $("#error").fadeOut();
        $("#btn-submit").prop("disabled", true);
        $("#btn-submit").html('<img src="ajax-loader.gif" />  Sending ...');
      },
      success: function (response) {
        var data = JSON.parse(response);
        if (data.status == 401) {
          $("#error").fadeIn(1000, function () {
            $("#error").html(
              '<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email/phone no. already taken !</div>'
            );
            $("#btn-submit").prop("disabled", false);
            $("#btn-submit").html("Sign me up");
          });
        } else if (data.status == 200) {
          $("#error").fadeIn(1000, function () {
            $("#error").html(
              '<div class="alert alert-success"><span class="glyphicon glyphicon-info-sign"></span> Account Created !</div>'
            );
            $("#btn-submit").prop("disabled", false);
            $("#signupform")[0].reset();
            $("#btn-submit").html("Sign me up");
          });
        } else {
          $("#error").fadeIn(1000, function () {
            $("#error").html(
              '<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   ' +
                data +
                " !</div>"
            );
            $("#btn-submit").html(
              '<span class="glyphicon glyphicon-log-in"></span>   Create Account'
            );
          });
        }
      },
    });
    return false;
  }
}

function signin() {
  $("#signinform").validate({
    rules: {
      password: {
        required: true,
        minlength: 6,
        maxlength: 60,
      },
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      password: {
        required: "<span style='color:red;'>please provide a password</span>",
        minlength:
          "<span style='color:red;'>password at least have 6 characters</span>",
        maxlength:
          "<span style='color:red;'>password must be 60 character long</span>",
      },
      email:
        "<span style='color:red;'>please enter a valid email address</span>",
    },
    submitHandler: submitForm,
  });

  /* handle form submit */
  function submitForm() {
    var data = $("#signinform").serialize();
    $.ajax({
      type: "POST",
      url: "signinstudent.php",
      data: data,
      beforeSend: function () {
        $("#signin-error").fadeOut();
        $("#btn-signin").prop("disabled", true);
        $("#btn-signin").html(
          '<img src="ajax-loader.gif" />  Checking Credentials ...'
        );
      },
      success: function (response) {
        var data = JSON.parse(response);
        var counter = 3;
        if (data.status == 401) {
          $("#signin-error").fadeIn(1000, function () {
            $("#signin-error").html(
              '<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   ' +
                data.message +
                "</div>"
            );
            $("#btn-signin").prop("disabled", false);
            $("#btn-signin").html("Sign me in");
          });
        } else if (data.status == 200) {
          $("#btn-signin").prop("disabled", true);
          $("#btn-signin").html("Redirecting...");
          // window.location = "dashboard";
        } else if (data.status == 403) {
          $("#signin-error").fadeIn(1000, function () {
            $("#signin-error").html(
              '<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   ' +
                data.message +
                "</div>"
            );
            $("#btn-signin").prop("disabled", false);
            $("#btn-signin").html("Sign me in");
          });
        } else {
          $("#signin-error").fadeIn(1000, function () {
            $("#signin-error").html(
              '<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   ' +
                data.message +
                " !</div>"
            );
            $("#btn-signin").prop("disabled", false);
            $("#btn-signin").html("Sign me in");
          });
        }
      },
    });
    return false;
  }
}
