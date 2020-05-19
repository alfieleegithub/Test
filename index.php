<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charisma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- top header -->
    <header class="container-fluid bg-white">
        <div class="row">
            <div class="col-12 py-4">
                <h1 class="text-center">
                    <a href="#">
                        <img src="images/logo.png" alt="Charisma">
                    </a>
                </h1>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <!-- left header -->
        <div class="row">
            <div class="vertical-header left-header position-fixed col-12 py-4 bg-white">
                <p class="text-center letter-spacing-4 mb-0">CHARISMA</p>
            </div>
        </div>
        <!-- right header -->
        <div class="row">
            <div class="vertical-header right-header position-fixed col-12 py-4 bg-white">
                <p class="text-center letter-spacing-4 color-green mb-0">ON THE PARK</p>
            </div>
        </div>

        <!-- content inside the leaves -->
        <div class="row justify-content-center mb-5">
            <div class="d-flex bg-leaves col-9 col-md-12 justify-content-center align-items-center">
                <div class="text-white text-center">
                    <h2 class="display-4 pb-4">life on the park.</h2>
                    <a href="#registration" class="btn btn-success rounded-0 py-2 px-4">REGISTER NOW</a>
                </div>
            </div>
        </div>

        <!-- The way to live -->
        <div class="row mb-5">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-9 col-md-5 p-3">
                        <h3 class="color-green display-4">The Way<br>To Live.</h3>
                        <p class="letter-spacing-3">PHASE 2 - CONDOS AT VAUGHAN MILLS</p>
                        <p>Alluring, refined and perfectly positioned – Charisma On
                            the Park presents condo living that redefines what a true
                            new home experience is all about. Located at Jane and
                            Rutherford, at the centre of all Vaughan has to offer, Charisma
                            literally puts you on the doorstep of shops, restaurants and
                            entertainment. The comforts of home have never been so
                            complete – outdoor pool, bocce courts, party rooms, a theatre
                            and so much more. Experience life on the park at Charisma.
                            Register today to receive the latest updates.</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <div class="bg-condos"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- registration -->
        <div class="row mb-5">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <h4 id="registration" class="letter-spacing-5 color-green text-center pb-4 border-bottom col-5 col-md-3">REGISTER</h4>
                </div>

                <!-- form -->
                <form action="/action.php" method="post" class="ajax-form">
                    <div class="row justify-content-center">
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="text" name="first_name" placeholder="*First Name" required>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="text" name="last_name" placeholder="*Last Name" required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="email" name="email" placeholder="*Email Address" required>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="text" name="phone" placeholder="*Phone Number" required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="text" name="city" placeholder="*City" required>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <input class="form-control rounded-0" type="text" name="postal_code" placeholder="*Postal Code" required>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-9 col-md-10 pt-5 py-2">
                            <p class="letter-spacing-3">I AM INTERESTED IN...</p>
                        </div>
                    </div>

                    <!-- unit size -->
                    <div class="row justify-content-md-start justify-content-center">
                        <div class="col-9 col-md-3 offset-md-1 p-2">
                            <label for="size">*Unit Size<label>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <select class="form-control" id="size" name="size" required>
                                <option value="" disabled selected>Please Select</option>
                                <option value="250 to 500">250 - 500 sq.ft.</option>
                                <option value="500 to 750">500 - 750 sq.ft.</option>
                                <option value="750 to 1000">750 - 1000 sq.ft.</option>
                                <option value="higher than 1000">&gt 1000 sq.ft.</option>
                            </select>
                        </div>
                    </div>

                    <!-- How did you hear about us -->
                    <div class="row justify-content-md-start justify-content-center">
                        <div class="col-9 col-md-3 offset-md-1 p-2">
                            <p for="heard_form">*How did you hear about us?<label>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <select class="form-control" id="heard_from" name="heard_from" required>
                                <option value="" disabled selected>Please Select</option>
                                <option value="friend">Friend</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- price range -->
                    <div class="row justify-content-md-start justify-content-center">
                        <div class="col-9 col-md-3 offset-md-1 p-2">
                            <label for="price">*Price Range<label>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <select class="form-control" id="price" name="price" required>
                                <option value="" disabled selected>Please Select</option>
                                <option value="lower than 400">&lt 400k</option>
                                <option value="400 to 500">400k - 500k</option>
                                <option value="500 to 600">500k - 600k</option>
                                <option value="higher than 600">&gt 600k</option>
                            </select>
                        </div>
                    </div>

                    <!-- Are you a broker -->
                    <div class="row justify-content-md-start justify-content-center">
                        <div class="col-9 col-md-3 offset-md-1 p-2">
                            <label>*Are you a broker?<label>
                        </div>
                        <div class="col-9 col-md-5 p-2">
                            <input class="pr-1" id="is_broker" type="radio" name="is_broker" value=1 required>
                            <label class="pr-4" for="is_broker">YES</label>
                            <input class="pr-1" id="is_not_broker" type="radio" name="is_broker" value=0 required>
                            <label for="is_not_broker">NO</label>
                        </div>
                    </div>

                    <!-- CASL -->
                    <div class="row justify-content-md-start justify-content-center">
                        <div class="col-9 offset-md-1 p-2">
                            <!-- Required field, this form can't be submitted without checking off CASL -->
                            <input id="consent_casl" type="radio" required>
                            <label for="consent_casl">*In accordance with Canadian Anti-Spam Legislation, I give my consent to receive electronic communications
                                from Greenpark Group regarding: upcoming communities, current communities, leasing opportunities, announcements,
                                invitations, events, promotions and all other related electronic communications.</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-start justify-content-center pt-2 pb-3">
                        <div class="col-9 offset-md-1 px-1">
                            <button type="submit" class="btn btn-success rounded-0 py-2 px-5">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- success or fail message -->
                <div class="row justify-content-md-start justify-content-center pt-2 pb-5">
                    <div class="col-9 offset-md-1">
                        <div class="message"></div>
                    </div>
                </div>
            </div>
    </main>

    <!-- footer -->
    <footer class="container-fluid">
        <div class="row pt-5 pb-4">
            <div class="col-12 text-center">
                <a href="https://www.greenparkgroup.ca/" target="_blank">
                    <img src="images/greenpark_group.png" alt="50 Greenpark Group">
                </a>
            </div>
        </div>

        <div class="row justify-content-center pb-3">
            <div class="col-7">
                <p class="small text-white">© 2017 Greenpark Holdings Ltd. Greenpark is a registered trademark of Greenpark Holdings Ltd. All Rights Reserved.
                    Prices and specifications subject to change without notice. E. & O.E. Brokers protected. Privacy Policy / Accessibility</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>