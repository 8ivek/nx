<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/divtable.css"/>
<script src="js/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="js/scripts.js" type="text/javascript"></script>

<div class="popup-showroom">
    <div class="new-showroom">
        <div class="account-setup">
            <p class="new">Creating a New Showroom</p>
            <a href=""> Member Login</a>
        </div><!--.account-setup ends-->

        <div class="setup-content">
            <ul>
                <li id="nx-account-setup" class="current"><a href="javascript:;"><b>1.Account Setup</b></a></li>
                <li id="nx-address"><a href="javascript:;"><b>2.Address</b>(Optional)</a></li>
                <li id="nx-vehicle"><a href="javascript:;"><b>3.Select Vehicle</b></a></li>

            </ul>
        </div><!--.setup-content ends-->


    </div><!--.new-showroom ends-->

    <div class="nx-account-setup">

        <div class="nx-divTable" style="width: 100%;">
            <div class="nx-divTableBody">
                <div class="nx-divTableRow">
                    <div class="nx-divTableCell">Account name:</div>
                    <div class="nx-divTableCell"><input type="text" placeholder="First Name"/></div>
                </div>
                <div class="nx-divTableRow">
                    <div class="nx-divTableCell">&nbsp;</div>
                    <div class="nx-divTableCell"><input type="text" placeholder="Last Name"/></div>
                </div>
                <div class="nx-divTableHeading">
                    Creating Account with:
                </div>
                <div class="nx-divTableRow">
                    <div class="nx-divTableCell">&nbsp;</div>
                    <div class="nx-divTableCell"><a class="myButton btncell" href="javascript:;">Cell Phone Number</a></div>
                </div>
                <div class="field-cell">
                    <div class="nx-divTableCell">Ok to Text Coupons? <input type="checkbox" name="cell-coupons" checked/></div>
                    <div class="nx-divTableCell"><input type="text" name="ycell" value=""/></div>
                </div>
                <div class="nx-divTableRow">
                    <div class="nx-divTableCell">&nbsp;</div>
                    <div class="nx-divTableCell"><a class="myButton btnemail" href="javascript:;">Email Address</a></div>
                </div>
                <div class="field-email">
                    <div class="nx-divTableCell">Ok to Text Coupons? <input type="checkbox" name="email-coupons" checked/></div>
                    <div class="nx-divTableCell"><input type="text" name="yemail" value=""/></div>
                </div>
            </div>
        </div>

        <div class="next">
            <input type="submit" value="Next" class="nx-next"/>
        </div><!--.next ends-->
    </div><!--.account-info ends-->

    <div class="nx-address">
        Address:
        <p><input type="text" name="street" placeholder="Number and Street"><br></p>
        <p><input type="text" name="city" placeholder="City"/>
            <select name="state">
                <option value="0">State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Coloroda</option>
            </select>
        </p>
        <p><input type="text" name="zipcode" placeholder="Zipcode"/> <a class="red-link skipaddress"
                                                                        href="javascript:;">Skip Address</a></p>

        <p>Military Service? <input type="checkbox" name="military" id="military" value="1" checked/> <label
                    for="military">Yes</label> &nbsp; <input type="checkbox" name="military" id="military" value="0"/>
            <label for="military">No</label></p>
        <p>College Graduate? <input type="checkbox" name="collegegrad" id="collegegrad" value="1" checked/> <label
                    for="collegegrad">Yes</label> &nbsp; <input type="checkbox" name="collegegrad" id="collegegrad"
                                                                value="0"/> <label for="collegegrad">No</label></p>

        <div class="next">
            <input type="submit" value="Next" class="nx-next2"/>
        </div><!--.next ends-->
    </div><!--.account-info ends-->

    <div class="nx-vehicles">
        Vehicles In Showroom: <input type="checkbox" name="notifyme"/><label for="notifyme">Notify me when one of my
            vehicles in my showroom gets sold</label>
        <p>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
        </p>
        <p><input type="button" value="Save Vehicles"/></p>
        <p>Select Vehicles: 481 of 481 <input type="text" value="Search by Stock#"/>
            <select name="year">
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
            </select>
            <select name="make">
                <option value="0">Make</option>
                <option value="acura">Acura</option>
                <option value="audi">Audi</option>
                <option value="bently">Bently</option>
                <option value="bmw">BMW</option>
                <option value="ferrari">Ferrari</option>
            </select>
            <select name="model">
                <option value="0">Model</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
                <option value="a3">A3</option>
                <option value="a3sedan">A3 Sedan</option>
            </select>

            <select name="trimstyle">
                <option value="0">Trim / Style</option>
                <option value="convertible">Convertible</option>
                <option value="wagon">Wagon</option>
                <option value="sports">Sports</option>
                <option value="minivan">Mini-van</option>
                <option value="utility">Utility</option>
            </select>

            <select name="color">
                <option value="0">Color</option>
                <option value="white">White</option>
                <option value="sliver">Silver</option>
                <option value="black">Black</option>
                <option value="grey">Grey</option>
                <option value="blue">Blue</option>
            </select>
        </p>

        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
            <div><img src="img/vehicles/1.jpg" width="150"/>
                <p>New 2016 Honda CR-V</p>
                <p><span class="red-link">Loan:</span> $462.92/mo.</p>
                <p><span class="red-link">Loan: </span> $332.29/mo</p>
                <p><span class="red-link">Includes:</span> abc abc abc...</p>
                <p><a href="javascript:;">View Details</a></p>
                <p><a href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>
        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
            <div><img src="img/vehicles/1.jpg" width="150"/>
                <p>New 2016 Honda CR-V</p>
                <p><span class="red-link">Loan:</span> $462.92/mo.</p>
                <p><span class="red-link">Loan: </span> $332.29/mo</p>
                <p><span class="red-link">Includes:</span> abc abc abc...</p>
                <p><a href="javascript:;">View Details</a></p>
                <p><a href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>
        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
            <div><img src="img/vehicles/1.jpg" width="150"/>
                <p>New 2016 Honda CR-V</p>
                <p><span class="red-link">Loan:</span> $462.92/mo.</p>
                <p><span class="red-link">Loan: </span> $332.29/mo</p>
                <p><span class="red-link">Includes:</span> abc abc abc...</p>
                <p><a href="javascript:;">View Details</a></p>
                <p><a href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>

        <div class="next nx-clear">
            <input type="submit" value="Save" class="nx-next3"/>
        </div><!--.next ends-->
    </div><!--.account-info ends-->


    <div class="popup-line">

    </div><!--.popup-line ends-->

</div><!--.popup-showroom ends-->