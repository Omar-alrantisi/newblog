<?php
include('includes/header.php');
?>
    <!-- banner start -->
    

    <section class="banner" id="banner">
        <div class="content">
       
            <h3>explore rhe nuture</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quaerat?</p>
            <a href="#" class="btn">my blogs</a>
        </div>
    </section>

    <!-- banner end -->

    <!-- posts start -->
    
    <section class="container" id="posts">
        <div class="posts-container">
            <div class="post">
                <img src="images/unknown.png" alt="" class="image">
                <div class="date">
                    <div class="far fa-clock"></div>
                    <span>1st may,2021</span>
                </div>
                <h3 class="title">blog title goes here</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe eos consequatur nam similique rerum molestias officia sit facere neque incidunt amet, maiores dicta. Eligendi fugit nobis voluptas voluptatibus porro, quae nisi ab labore nemo, cumque doloremque quasi iste ex necessitatibus reprehenderit magnam esse consequatur! Eaque distinctio et recusandae voluptatem.</p>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quis voluptas autem numquam iusto asperiores, deleniti voluptates amet, assumenda voluptate adipisci sapiente iste tenetur eveniet veritatis neque explicabo, sequi ab?</p>
                 <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="comment">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>

                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
            </div>

            <div class="post">
                <img src="images/unknown.png" alt="" class="image">
                <div class="date">
                    <div class="far fa-clock"></div>
                    <span>1st may,2021</span>
                </div>
                <h3 class="title">blog title goes here</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe eos consequatur nam similique rerum molestias officia sit facere neque incidunt amet, maiores dicta. Eligendi fugit nobis voluptas voluptatibus porro, quae nisi ab labore nemo, cumque doloremque quasi iste ex necessitatibus reprehenderit magnam esse consequatur! Eaque distinctio et recusandae voluptatem.</p>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quis voluptas autem numquam iusto asperiores, deleniti voluptates amet, assumenda voluptate adipisci sapiente iste tenetur eveniet veritatis neque explicabo, sequi ab?</p>
                <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="comment">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>

                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="box">
                <h3 class="title">about me</h3>
                <div class="about">
                    <img src="images/omar2.jpeg" alt="">
                    <h3>omar alrantisi</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse?</p>
                     <div class="follow">
                         <a href="#" class="fab fa-facebook-f"></a>
                         <a href="#" class="fab fa-twitter"></a>
                         <a href="#" class="fab fa-instagram"></a>
                         <a href="#" class="fab fa-linkedin"></a>
                     </div>
                </div>
            </div>

            <div class="box">
                <h3 class="title">categories</h3>
                <div class="category">
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                <a href="#">example <span>55</span></a>
                </div>

            </div>
            <div class="box">
                <h3 class="title">popular posts</h3>
                <div class="p-post">
                    <a href="#">
                        <h3>01. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>02. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>03. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>04. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                </div>
            </div>
    
            <div class="box">
                <h3 class="title">popular tags</h3>
                <div class="tags">
                    <a href="#">travel</a>
                    <a href="#">photo</a>
                    <a href="#">science</a>
                    <a href="#">biology</a>
                    <a href="#">aliens</a>
                    <a href="#">nature</a>
                    <a href="#">mountain</a>
                    <a href="#">river</a>
                    <a href="#">camp</a>
                    <a href="#">landscape</a>
                    <a href="#">world</a>
                </div>
            </div>
    
        </div>

    </section>

    <!-- posts end -->
    <!-- contact section starts  -->

<section class="contact" id="contact">

    <form action="" id="fupForm1" method="post">
        <h3>contact me</h3>
        <div class="inputBox">
            <input type="text" name="name" id="name" placeholder="name">
            <input type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" name="number" id="number" placeholder="number">
            <input type="text" name="subject" id="subject" placeholder="subject">
        </div>
        <textarea placeholder="message" cols="30" name="message" id="message" rows="10"></textarea>
        <input type="submit" id="submit1" name="submit" value="send message" class="btn">
    </form>

</section>
<script>
$(document).ready(function() {
        $('#submit1').on('click', function() {
            $("#submit1").attr("disabled", "disabled");
            var name = $('#name').val();
            var email = $('#email').val();
            var number = $('#number').val();
            var subject = $('#subject').val();
            var message = $('#message').val();

            if (name != "" && email != "" && number != "" && subject != "" && message != "") {
                $.ajax({
                    url: "./savecontact.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        number: number,
                        subject: subject,
                        message: message,
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            $("#submit1").removeAttr("disabled");
                            $('#fupForm1').find('input:text').val('');
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


<!-- contact section ends -->
<?php
include('includes/footer.php');
?>