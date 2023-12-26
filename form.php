<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/RemachineScript_Personal_Use.ttf">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <?php
    include("./header.php")
    ?>






    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form id="regForm">
                    <h1 id="register">List Your Car</h1>
                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                    <div class="tab">
                        <h3>Where is your car located?</h3>
                        <p><input placeholder="Enter Address" oninput="this.className = ''" name="address">
                        </p>

                    </div>
                    <div class="tab">
                        <h3>Please enter a specific location.</h3>
                        <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>
                        <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                        <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                        <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                        <p><input placeholder="zipcode" oninput="this.className = ''" name="zipcode"></p>
                    </div>
                    <div class="tab">
                        <p style="margin: 0 auto;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429174.1217512339!2d-97.06121664275169!3d32.82080972834751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c19f77b45974b%3A0xb9ec9ba4f647678f!2sDallas%2C%20TX%2C%20USA!5e0!3m2!1sen!2s!4v1702488859809!5m2!1sen!2s" width="550" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    </div>

                    <div class="tab">
                        <h3>Where is your car located?</h3>
                        <p><input autocomplete="off" class="locationsAutocompleteInput-input" data-1p-ignore="true" data-testid="locationsAutocomplete" id="location" placeholder="Enter address" type="text" value="GRAND RIVER AVE UNIT 227, Dearborn, Michigan, TX 48124"></p>
                        <h3>Which car do you have?</h3>
                        <p><input placeholder="Enter Your VIN" oninput="this.className = ''" name="text">
                        </p>
                        <p>
                            <input class="form-check-input" onchange="this.className" type="checkbox" value="1" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                My model year is 1981 or later
                            </label>
                        </p>
                    </div>


                    <div class="tab">
                        <h3>Trim and style</h3>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p>
                                    <label for="">Trim</label>
                                    <select class="form-select form-select-lg mb-3" id="menuSelect" aria-label=".form-select-lg example">
                                        <option value="">Open this select menu</option>
                                        <option value="1">XL</option>
                                        <option value="2">XLT</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group optional-select d-none">
                                    <label for="optional">Style</label>
                                    <select name="optional" class="form-select form-control-lg">
                                        <option value="">Reg Cab 137" XLT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p>
                        <h3>Odometer and transmission</h3>
                        <label for="">Distance</label>
                        <select class="form-select form-select-lg mb-3" id="menuSelect" aria-label=".form-select-lg example">
                            <option value="">Open this select menu</option>
                            <option value="1">0-10k Miles</option>
                            <option value="1">10-20k Miles</option>
                            <option value="1">20-30k Miles</option>
                            <option value="1">30-40k Miles</option>
                            <option value="1">40-50k Miles</option>
                            <option value="1">50-60k Miles</option>
                            <option value="1">60-70k Miles</option>
                            <option value="1">70-80k Miles</option>
                            <option value="1">80-90k Miles</option>
                            <option value="1">90-100k Miles</option>
                            <option value="1">100-110k Miles</option>
                            <option value="1">110-120k Miles</option>
                            <option value="1">120-130k Miles</option>
                            <option value="1">130k + Miles</option>
                        </select>
                        </p>
                        <p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                            <label class="form-check-label" for="radio2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" disabled>
                            <label class="form-check-label">Option 3</label>
                        </div>
                        </p>

                    </div>


                    <div class="tab">

                    </div>




                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                            shortly!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <?php
    include("footer.php")
    ?>





    <script>
        //your javascript goes here
        var currentTab = 0;
        document.addEventListener("DOMContentLoaded", function(event) {


            showTab(currentTab);

        });

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                // document.getElementById("regForm").submit();
                // return false;
                //alert("sdf");
                document.getElementById("nextprevious").style.display = "none";
                document.getElementById("all-steps").style.display = "none";
                document.getElementById("register").style.display = "none";
                document.getElementById("text-message").style.display = "block";

            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
        $("#menuSelect").change(function() {
            if ($(this).val() == '') {
                $(".optional-select").addClass("d-none")
            } else {
                $(".optional-select").removeClass("d-none")
            }
        });
    </script>

    <?php
    include("chat.php")
    ?>

</body>

</html>