// signup form submission//
$("#signupform").submit(function (event) {
  //    prvent default php processing //
  event.preventDefault();

  // collect user inputs//
  var datatopost = $(this).serializeArray();
//   console.log(datatopost);

  // send them to signup.php using Azax //
  $.ajax({
    url: "signup.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#signupmessage").html(data);
      }
    },
    error: function () {
      $("#signupmessage").html(
        "<div class='alert alert-danger'>There was an error with the Ajax call. Please try again later.</div>"
      );
    },
  });
});

// ajax call for login form //

// login form submission//
$("#loginform").submit(function (event) {
  //    prvent default php processing //
  event.preventDefault();

  // collect user inputs//
  var datatopost = $(this).serializeArray();
  //   console.log(datatopost);

  // send them to signup.php using Azax //
  $.ajax({
    url: "login.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data=="success") {
       window.location="mainpagelogin.php"
      }else{ $("#loginmessage").html(data)}
    },
    error: function () {
      $("#signupmessage").html(
        "<div class='alert alert-danger'>There was an error with the Ajax call. Please try again later.</div>"
      );
    },
  });
});

// ajax call for forgot password //

// forgotpassword form submission//
$("#forgotpasswordform").submit(function (event) {
  //    prvent default php processing //
  event.preventDefault();

  // collect user inputs//
  var datatopost = $(this).serializeArray();
  //   console.log(datatopost);

  // send them to forgot-password.php using Azax //
  $.ajax({
    url: "forgot-password.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      $("#forgotpasswordmessage").html(data);
    },
    error: function () {
      $("#signupmessage").html(
        "<div class='alert alert-danger'>There was an error with the Ajax call. Please try again later.</div>"
      );
    },
  });
});

