function submitForm() {
    var firstName = $("input[name=firstName]").val();
    var lastName = $("input[name=lastName]").val();
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();
    var age = $("input[name=age]").val();
    var mobile = $("input[name=phonenumber]").val();
      var formData = {
        firstName:firstName,
        lastName:lastName,
        email: email,
        password: password,
        age:age,
        mobile: mobile,
      };
      $.ajax({
        url: "./php/register.php",
        type: "POST",
        data: formData,
        success: function (response) {
          window.location.replace("login.html");
          console.log(response);
        },
        error: (xhr, textStatus, errorThrown) => {
          console.error("Error:", textStatus, errorThrown);
        },
      });
      // alert(name);
}
