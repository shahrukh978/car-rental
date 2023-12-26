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
    <link rel="stylesheet" href="assets//font/inter/Inter.ttf">
</head>

<body style="background-color: #fff;">
    <?php
    include("./header.php")
    ?>
    <div class="row" style="padding:20px 0px 50px 0px; margin-top: 0px; background-image: url('assets/img/jeepbk.png'); background-position: center; background-size: cover;">
        <div col-md 12>
            <h2 class="featurette-heading fw-normal lh-1" style="font-size:46px; text-transform: capitalize; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat;">
                Carcalculator</h2>
        </div>
    </div>

    <div class="work container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-normal lh-1" style="font-size:40px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize; padding: 60px 0px 0px 0px;">The Rent2Ryde Carcalculator®</h2>
                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">CDiscover how much income you could earn with different vehicles as you build your business on Turo</h5>
                <p class="lead" style="font-size: 18px; text-align: center;">Want to know how much you could earn on Turo? Choose your region and budget to see which cars have the highest potential return on investment (ROI).

                    Note: Estimates are based on past data. Your earnings will depend on your car’s availability and price, demand, and market seasonality in your area.</p>
            </div>
        </div>
    </div>

    <div class="workf container">
        <div class="row featurette" style="padding:0px 50px 0px 50px;">
            <div class="col-md-8">
                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Search by budget</h5>


                <div class="row">
                    <div class="col-12 col-md-6">
                        <h5 class="" style="font-size:16px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Region¹</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Region¹</option>
                            <option value="1">Chicago</option>
                            <option value="2">Dallas</option>
                            <option value="3">Orlando</option>
                            <option value="3">New York</option>
                            <option value="3">San Deigo</option>
                            <option value="3">Las Vegas</option>
                            <option value="3">Phoenix</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="" style="font-size:16px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Vehicle budget range²</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select budget range²</option>
                            <option value="1">$10K To $25K</option>
                            <option value="2">$25K To $40K</option>
                            <option value="3">$40K To $100K</option>
                        </select>
                    </div>
                </div>

                <!-- <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle cal" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        National Average
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">Chicago</a>
                        </li>
                        <li>
                            <a href="">Dallas</a>
                        </li>
                        <li>
                            <a href="">Orlando</a>
                        </li>
                        <li>
                            <a href="">New York</a>
                        </li>
                    </ul>
                </div>


                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle cal" type="button" data-bs-toggle="dropdown" style="margin-left: 100px;" aria-expanded="false">
                        $10K To $25K
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">$10K To $25K</a>
                        </li>
                        <li>
                            <a href="">$25K To $40K</a>
                        </li>
                        <li>
                            <a href="">$40K To $100K</a>
                        </li>
                        <li>
                            <a href="">New York</a>
                        </li>
                    </ul>
                </div> -->


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>1 | Volvo V90 Cross Country</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">158.3% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$11,140</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,468</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,300/year</span> </P>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>2 | Dodge Grand Caravan</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">181.9% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$16,228</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$3,596</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$10,138/year</span> </P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>3 | Ford Focus </h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">180.3% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$11,187</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,479</span> </P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$6,947/year</span> </P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>4 | Ford Fiesta </h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">177.8% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$11,488</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,545</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,071/year</span></P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>5 | Ford Ecosport </h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">171.9% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$15,129</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$3,352</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$9,114/year</span></P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>6 | Chevrolet Spark</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">170.8% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$11,968</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,652</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,181/year</span></P>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>7 | Mitsubishi Mirage</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">168.6% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$11,834</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,622</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,042/year</span></P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>8 | Nissan Versa Note </h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">162.4% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$12,224</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,709</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,107/year</span></P>
                        </div>
                    </div>
                </div>



                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>9 | Mitsubishi Mirage G4</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">159.1% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$12,560</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$2,783</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$7,211/year</span></P>
                        </div>
                    </div>
                </div>


                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>10 | Subaru Forester</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">159.1% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$24,037</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$5,326</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$13,797/year</span></P>
                        </div>
                    </div>
                </div>
                <h5 class="" style="font-size:22px; padding-top: 10px; font-weight:500 !important; color:#000000; font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Search by budget</h5>

                <p class="lead" style="font-size: 16px; padding-bottom:10px; text-align: left;">Check out the average annual earnings for different vehicles in top Turo markets.

                    Note: When not enough data is available, some vehicles don’t appear in certain regions.</p>
                <div class="row" style="">
                    <div class="col-12 col-md-6">
                        <h5 class="" style="font-size:16px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Region¹</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Region¹</option>
                            <option value="1">Chicago</option>
                            <option value="2">Dallas</option>
                            <option value="3">Orlando</option>
                            <option value="3">New York</option>
                            <option value="3">San Deigo</option>
                            <option value="3">Las Vegas</option>
                            <option value="3">Phoenix</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="" style="font-size:16px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Make and model</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Make and model</option>
                            <option value="1">Audi3</option>
                            <option value="1">Audi4</option>
                            <option value="1">Audi4</option>
                            <option value="1">Audi5</option>
                            <option value="1">Audi6</option>
                            <option value="1">Audi7</option>
                            <option value="1">Audi Q3</option>
                            <option value="1">Audi Q5</option>
                            <option value="1">Audi Q7</option>
                            <option value="1">Audi Q8</option>
                        </select>
                    </div>
                </div>

                <div class="cal1" style="padding:20px 0px; margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Audi Q3</h4>
                        </div>
                        <div class="col-md-6">
                            <h4 style="margin-left: 0px;">65.6% Annualized ROI</h4>
                        </div>
                    </div>
                </div>

                <div class="cal1" style="padding:0px 0px;">
                    <div class="row">
                        <div class="col-md-4">
                            <P>Estimated Value: <br><span>$27,395</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Annual Loan Cost: <br><span>$6,070</span></P>
                        </div>
                        <div class="col-md-4">
                            <P>Avg. Earnings: <br><span>$10,051/year</span></P>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4" style="">
                <div class="work1 d-flex">
                    <h2 class=" fw-normal lh-1" style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 0px;">Glossary</h2>
                </div>
                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Estimated value</h5>
                <p class="lead" style="font-size: 18px;">An approximate market value of a vehicle based on pricing data for model years 2018 to 2024. This value incorporates new and used vehicle prices, and represents an estimated mid-point between the price of a brand new 2024 model and a pre-owned 2018 model, across all trims. This figure doesn’t include vehicle taxes, registration fees, or dealer adjustments.</p>

                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Annual loan cost</h5>
                <p class="lead" style="font-size: 18px;">Your total monthly car loan payments over the course of a year, assuming 10% down, 8.5% APR, and a 60-month loan term.</p>


                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Average earnings³</h5>
                <p class="lead" style="font-size: 18px;">An estimated average of the total amount you’re paid for sharing your car on Turo over the course of a year. This figure doesn’t include your vehicle down payment, vehicle loan payments, or business expenses like cleaning, parking, maintenance, damage claims, depreciation, or other costs.</p>

                <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: font-weight: 600; montserrat; text-align: left; text-transform: capitalize;">Return on Investment (ROI)</h5>
                <p class="lead" style="font-size: 18px;">A financial performance measurement used to evaluate an investment’s profitability by comparing the amount of money you earn with the cost of the initial investment, as well as your business expenses. In this tool, the ROI is estimated based on past data.</p>
            </div>
        </div>
    </div>


    <div class="optn" style="background-image: url('assets/img/tr.png'); padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="featurette-heading fw-normal lh-1" style="font-size:40px; font-weight:600 !important; color:#593CFB; font-family: montserrat; text-align: center; text-transform: capitalize;">Find out how to start a
                        small business on Turo</h2>

                    <h5 class=" fw-normal lh-1" style="font-size:20px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">
                        Discover what hosting on Turo is like and see how much you could earn as you scale your business.</h5>
                    <p class="lead" style="font-size: 16px; text-align: center;">The Turo Carculator® ranks vehicles based on "Average annualized ROI," which is the ratio of average annual vehicle earnings divided by average annual vehicle loan payments for a specific make and model in a specific region. Earnings are based on a monthly estimation and are multiplied by 12 for annual earnings. The annualized return on investment (ROI) ranking model assumes a standard 60-month loan term, 8.5% interest rate, and 10% down payment on the vehicle purchase price. Past performance does not predict future results. In some cases, the earnings figures were rounded for ease of display.</p>

                    <p style="font-size: 16px; text-align: center;">¹ Region is defined as one of the top 18 market areas where Turo is available throughout the US as ranked by gross net revenue. These geographical zones loosely follow the borders of Nielsen's Designated Marketing Areas (DMA) map. “National average” represents the average across all 18 top US markets in the model. “US Other” represents the average across all US markets, excluding the top 18 markets.</p>

                    <p style="font-size: 16px; text-align: center;">² Vehicle budget range is based on vehicle value, exclusive of taxes, fees, and options, and any dealer price adjustments or increases. Vehicle value is determined using vehicle pricing data from Glass auto pricing product.</p>

                    <p style="font-size: 16px; text-align: center;">³ The average annual earnings represent the average Turo earnings among all US-based vehicles where there were at least 3 distinct vehicles within each market area between 01/01/2020 and 06/31/2023. The vehicles have a value of $10,000 to $100,000 and are model years 2018-2024.</p>
                    <button style="padding:10px 40px; text-align: center; margin: 20px 0px; background-color: blue; font-family: poppins; display: block; margin: 0 auto; font-size: 16px; color: #fff; border: none;">Learn more</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <?php
    include("chat.php")
    ?>


    <?php
    include("footer.php")
    ?>

</body>

</html>