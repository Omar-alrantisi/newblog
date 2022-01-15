<?php
include('includes/header.php');
?>
    <!-- Start Sign Up -->
    <section class="signup">

    <div class="registration-form">
        <h1>Registration Form</h1>
        <form action="#" method="post" id="fupForm">
            <p>Full Name</p>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name">
            <div id="fullname_message"></div>
            <p>User Name</p>
            <input type="text" name="username" id="username" placeholder="User Name">
            <div id="username_message"></div>
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Email">
            <div id="email_message"></div>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Password">
            <div id="password_message"></div>
            <input type="submit" name="submit" id="submit" value="submit"></input>
        </form>

    </div>
</section>
<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            $("#submit").attr("disabled", "disabled");
            var fullname = $('#fullname').val();
            var username = $('#username').val();
            var email = $('#email').val();
            var password = $('#password').val();

            if (fullname != "" && username != "" && email != "" && password != "") {
                $.ajax({
                    url: "./save.php",
                    type: "POST",
                    data: {
                        fullname: fullname,
                        username: username,
                        email: email,
                        password: password,
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            $("#submit").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#success").show();
                            $('#success').html('Signed up successfully !');
                            window.location.href = "index.php";
                          } else if (dataResult.statusCode == 201) {
                            alert("Error occurred !");
                        }

                    }
                });
            } else {
                alert('Please fill all the field !');
            }
        });
    });
</script>
    <!-- End Sign Up -->

    <script src="../"></script>

    <?php
include('includes/footer.php');
?>


   