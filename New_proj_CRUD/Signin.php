<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignIN Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(15px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Sign Up Now</h2>
                            <form method="POST" action="Main/Signin_Handler.php">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                               
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="FName"/>
                                            <label class="form-label" for="form3Example1">Enter Your Name</label>
                                        </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3" class="form-control" name="email" />
                                    <label class="form-label" for="form3Example3">Enter Your Email Address</label>
                                </div>

                                <!-- Password input -->
                                <div class="row">
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control" name="pass" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control" name="conf_pass" />
                                            <label class="form-label" for="form3Example4">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                        checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Subscribe to our newsletter
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-5 mb-4 mb-lg-1">
                    <!-- <img src="https://images.unsplash.com/photo-1580122468928-0e9940385cb1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fG1vdW50YWluc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"class="w-100 rounded-4 shadow-4" alt=""/> -->
                    <!-- <img src="https://images.unsplash.com/photo-1436891620584-47fd0e565afb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHN0YXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"class="w-100 rounded-4 shadow-4" alt=""/> -->
                    <!-- <img src="https://images.unsplash.com/photo-1547153760-18fc86324498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGFuY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"class="w-100 rounded-4 shadow-4" alt=""/> -->
                    <img src="https://images.unsplash.com/photo-1528716321680-815a8cdb8cbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bW90aXZhdGlvbmFsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"class="w-100 rounded-4 shadow-4" alt=""/>
                    <!-- <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                        class="w-100 rounded-4 shadow-4" alt="" /> -->
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>