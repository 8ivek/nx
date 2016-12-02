<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
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
        <div>
            <div class="nx-row clearfix">
                <div class="nx-col1"><strong>Account name:</strong></div>
                <div class="nx-col2"><input type="text" placeholder="First Name" class="name"/></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">&nbsp;</div>
                <div class="nx-col2"><input type="text" placeholder="Last Name" class="name"/></div>
            </div>
            <div class="nx-row clearfix">
                <div><strong>Creating Account with:</strong></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">&nbsp;</div>
                <div class="nx-col2"><a class="myButton btncell" href="javascript:;">Cell Phone Number</a></div>
            </div>
            <div class="nx-row clearfix field-cell">
                <div class="nx-col1"><label for="cell-coupons">Ok to Text Coupons?</label> <input type="checkbox" name="cell-coupons" checked /></div>
                <div class="nx-col2"><input type="text" name="ycell" value=""/></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">&nbsp;</div>
                <div class="nx-col2"><a class="myButton btnemail" href="javascript:;">Email Address</a></div>
            </div>
            <div class="nx-row clearfix field-email">
                <div class="nx-col1"><label for="email-coupons">Ok to Text Coupons?</label> <input type="checkbox" name="email-coupons" id="email-coupons" checked /></div>
                <div class="nx-col2"><input type="text" name="yemail" value=""/></div>
            </div>
        </div>

        <div class="nx-row clearfix">
            <div class="next">
                <input type="submit" value="Next" class="nx-next"/>
            </div><!--.next ends-->
        </div>
        <p>&nbsp;</p>
    </div><!--.account-info ends-->

    <div class="nx-address">
        <div>
            <div class="nx-row clearfix">
                <div class="nx-col1">Address:</div>
                <div class="nx-col2"><input type="text" name="street" placeholder="Number and Street" class="street"/></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">&nbsp;</div>
                <div class="nx-col2"><input type="text" name="city" placeholder="City" class="city" /><select name="state">
                        <option value="0">State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Coloroda</option>
                    </select></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">&nbsp;</div>
                <div class="nx-col2"><input type="text" name="zipcode" class="zipcode" placeholder="Zipcode" /> &nbsp; <a class="red-link skipaddress" href="javascript:;">Skip Address</a></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">Military Service?</div>
                <div class="nx-col2"><input type="radio" name="military" id="military_yes" value="1" /><label for="military_yes">Yes</label><input type="radio" name="military" id="military_no" value="0" checked /><label for="military_no">No</label></div>
            </div>
            <div class="nx-row clearfix">
                <div class="nx-col1">College Graduate?</div>
                <div class="nx-col2"><input type="radio" name="collegegrad" id="collegegrad_yes" value="1" checked /><label for="collegegrad_yes">Yes</label><input type="radio" name="collegegrad" id="collegegrad_no" value="0" /> <label for="collegegrad_no">No</label></div>
            </div>
        </div>

        <div class="nx-row clearfix">
            <div class="next">
                <input type="submit" value="Next" class="nx-next2"/>
            </div><!--.next ends-->
        </div>
        <p>&nbsp;</p>
    </div><!--.account-info ends-->

    <div class="nx-vehicles">
		<div class="veh-sroom">
       <b> Vehicles In Showroom:</b> &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="notifyme" id="notifyme" /><label for="notifyme">Notify me when one of my
            vehicles in my showroom gets sold</label>
			</div>
        <p>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
            <span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
			<span class="imgcontainer"><img src="img/vehicles/1.jpg" width="100"/></span>
        </p>
        <p><input type="button" value="Save Vehicles"/ class="myButton fullwidth"></p>
        
		<div class="select-vehicles cf">
		<p>
		<div class="select-vehicles-colone">
		<span class="veh-span">Select Vehicles: 481 of 481</span>
		   <select class="model" name="model">
                <option value="0">Model</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
                <option value="a3">A3</option>
                <option value="a3sedan">A3 Sedan</option>
            </select>
		</div><!--.select-vehicles-colone ends-->
		<div class="select-vehicles-colone">
		<span>
		<input class="sb-stock" type="text" value="Search by Stock#"/>
            <select class="year" name="year">
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
            </select>
		</span>	
			 <select class="trimstyle" name="trimstyle">
                <option value="0">Trim / Style</option>
                <option value="convertible">Convertible</option>
                <option value="wagon">Wagon</option>
                <option value="sports">Sports</option>
                <option value="minivan">Mini-van</option>
                <option value="utility">Utility</option>
            </select>
			</div><!--.select-vehicles-colone ends-->
			
			<div class="select-vehicles-collast">
            <select name="make">
                <option value="0">Make</option>
                <option value="acura">Acura</option>
                <option value="audi">Audi</option>
                <option value="bently">Bently</option>
                <option value="bmw">BMW</option>
                <option value="ferrari">Ferrari</option>
            </select>
			        

			


            <select name="color">
                <option value="0">Color</option>
                <option value="white">White</option>
                <option value="sliver">Silver</option>
                <option value="black">Black</option>
                <option value="grey">Grey</option>
                <option value="blue">Blue</option>
            </select>
			
			</div><!--.select-vehicles-collast ends-->
        </p>
		</div><!--.select-vehicles ends-->
		<div class="3col cf">		
		<div class="vehicle-3col">
        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
            <div><img src="img/vehicles/1.jpg" width="150"/>
                <p class="veh-details">New,2016 Honda CR-v EX, AWD 5dr EX, AWD, CVT w/OD, Regular Unleaded I-4 2.4 L/144, City 25/31 Highway, Sport Utility, Stock#36191, $28195.0</p>
                <p><span class="red-link">Loan:</span> <b class="veh-price">$462.92/mo.</b> for 60 mos@ 7.5% APR</p>
                <p><span class="red-link">Loan: </span> <b class="veh-price">$332.29/mo.</b> for 36 mos@ 12k/yr</p>
                <p><span class="red-link">Includes:</span>Sales Tax,Title,License,Doc Fee,Admin</p>
                <p><a class="veh-button" href="javascript:;">View Details</a></p>
                <p><a class="veh-button" href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>
		</div><!--.vehicle-3col ends-->
		<div class="vehicle-3col veh-mid">
        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
             <div><img src="img/vehicles/1.jpg" width="150"/>
                <p class="veh-details">New,2016 Honda CR-v EX, AWD 5dr EX, AWD, CVT w/OD, Regular Unleaded I-4 2.4 L/144, City 25/31 Highway, Sport Utility, Stock#36191, $28195.0</p>
                <p><span class="red-link">Loan:</span> <b class="veh-price">$462.92/mo.</b> for 60 mos@ 7.5% APR</p>
                <p><span class="red-link">Loan: </span> <b class="veh-price">$332.29/mo.</b> for 36 mos@ 12k/yr</p>
                <p><span class="red-link">Includes:</span>Sales Tax,Title,License,Doc Fee,Admin</p>
                <p><a class="veh-button" href="javascript:;">View Details</a></p>
                <p><a class="veh-button" href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>
		</div><!--.vehicle-3col ends-->
		<div class="vehicle-3col">
        <div class="veh-container">
            <h3>2016 Honda CR-V</h3>
             <div><img src="img/vehicles/1.jpg" width="150"/>
                <p class="veh-details">New,2016 Honda CR-v EX, AWD 5dr EX, AWD, CVT w/OD, Regular Unleaded I-4 2.4 L/144, City 25/31 Highway, Sport Utility, Stock#36191, $28195.0</p>
                <p><span class="red-link">Loan:</span> <b class="veh-price">$462.92/mo.</b> for 60 mos@ 7.5% APR</p>
                <p><span class="red-link">Loan: </span> <b class="veh-price">$332.29/mo.</b> for 36 mos@ 12k/yr</p>
                <p><span class="red-link">Includes:</span>Sales Tax,Title,License,Doc Fee,Admin</p>
                <p><a class="veh-button" href="javascript:;">View Details</a></p>
                <p><a class="veh-button" href="javascript:;">Add to myShowroom</a></p>
            </div>
        </div>
		</div><!--.vehicle-3col ends-->
		</div><!--.3col ends-->
		
		<div class="veh-next cf">
        <div class="next nx-clear">
            <input type="submit" value="Save" class="nx-next3"/>
        </div><!--.next ends-->
		</div><!--.veh-next ends-->
    </div><!--.account-info ends-->


    <div class="popup-line">

    </div><!--.popup-line ends-->

</div><!--.popup-showroom ends-->