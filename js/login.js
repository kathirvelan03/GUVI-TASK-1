
function submitForm() {
  alert("success")
      console.log("hello");
      let formData = {
        email: $("#email").val(),
        password: $("#password").val(),
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "./php/login.php",
        data: formData,
        success: function (response) {
         console.log(response);
          let res = JSON.parse(response);
          if (res.status == "success") {
            localStorage.setItem("redisId", res.session_id);
            window.location.replace("http://localhost/guvitask/profile.html");
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
        
            alert("Username or Password entered Wrongly");
            window.location.replace("http://127.0.0.1:5500/login.html");
          console.log(errorThrown); // log error message to console
        },
    })
  }