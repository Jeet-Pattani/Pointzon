



<style>
    /* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn img{

  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.dropbtn i{
	position: relative;
	left: 0.7rem;
	top: 4px;
	transition: 0.3s ease-in-out;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  right: -3rem;
  background-color: #f9f9f9;
  min-width: 160px;
  width: max-content;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rebeccapurple;color: #f9f9f9;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: transparent;
}

.dropdown:hover .dropbtn i{
  transform: rotate(180deg);
}
</style>


<nav class="navbarMain">
            <div class="logo">
                <a href="../">Pointzon</a>
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li id="nav-item-1"><a href="../">Home</a></li>
                <li id="nav-item-2"><a href="../resources/about">About Us</a></li>
                <li class="dropdownMenu" id="nav-item-3">

                    <div class="menuOptionsContainer" id="dropdownId">
                    <h4 class="label"><a href="../resources/services">Services</a></h4>
                        <div class="content">
                            <div class="sideHeading"><h5>Pointzon's Services</h5></div>
                            <div class="categories">
                                <div class="categories-wrapper">
                                <h5 class="cheading">Funding Services</h5>
                                <p><a href="../services/Charity">Charity</a></p>
                                <p><a href="../services/Crowdfunding">Crowdfunding</a></p>
                                </div>
                            </div> 
                            <div class="categories">
                                <div class="categories-wrapper">
                                <h5 class="cheading">Payment Services</h5>
                                <p><a href="../services/PaymentTransfer">Payment Transfer</a></p>
                                <p><a href="../services/MerchantServices">Merchant Services</a></p>
                                </div>
                            </div>
                            <div class="categories">
                                <div class="categories-wrapper">
                                <h5 class="cheading">Financial Services</h5>
                                <p><a href="../services/Offshore">Offshore Investments</a></p>
                                <p><a href="../services/Investments">Investments</a></p>
                                <p><a href="../services/InvestmentBanking">Investment Banking</a></p>
                                <p><a href="../services/CurrencyRiskManagement">Currency & Risk Management</a></p>
                                <p><a href="../services/Banking">Private & Corporate Banking Solutions</a></p>
                                </div>
                            </div>
                            <div class="categories">
                                <div class="categories-wrapper">
                                <h5 class="cheading">Technology Services</h5>
                                <p><a href="../services/Fintech">Fintech</a></p>
                                <p><a href="../services/Blockchain">Blockchain Wallet</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li id="nav-item-4"><a href="../resources/news">News</a></li>
                <li id="nav-item-5"><a href="../resources/faq">FAQ</a></li>
                <li id="nav-item-6"><a href="../resources/contact">Contact Us</a></li>


                <?php
                if (isset($_SESSION['loggedin'])) {

                    echo '<div class="dropdown">
                    <button class="dropbtn"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"><i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">'?>
                      <?php if ($_SESSION['investorloggedin']==true) {
                                           echo '<a href="../resources/investor/investor-dashboard">Dashboard</a>
                                           <a href="../resources/investor/editDetails">Edit Your Details</a>
                                           <a href="../resources/investor/changePass">Change Password</a>
                                           <a href="../resources/logout">Logout</a>
                                           </div>
                                         </div>';
                      }  
                      else{
                        if ($_SESSION['businessloggedin']==true)
                        {
                          echo '<a href="../resources/business/business-dashboard">Dashboard</a>
                          <a href="../resources/business/editDetails">Edit Your Details</a>
                          <a href="../resources/business/changePass">Change Password</a>
                            <a href="../resources/logout">Logout</a>
                          </div>
                        </div>';
     }  
                      }                

                } else {

                    echo '<a  id="nav-item-8" class="btn login-button" href="../resources/login" role="button">Login</a>';
                    echo '<a  id="nav-item-9" class="btn join-button" href="../resources/signup" role="button">Join</a>';
                }
                ?>
            </ul>
        </nav>
	