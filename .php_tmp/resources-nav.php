
			<nav class="navbarMain">
            <div class="logo">
                <a href="../index">Pointzon</a>
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li id="nav-item-1"><a href="../index">Home</a></li>
                <li id="nav-item-2"><a href="about">About Us</a></li>
                <li class="dropdownMenu" id="nav-item-3">

                    <div class="menuOptionsContainer" id="dropdownId">
                        <h4 class="label">Services</h4>
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
                <li id="nav-item-4"><a href="index">News</a></li>
                <li id="nav-item-5"><a href="faq">FAQ</a></li>
                <li id="nav-item-6"><a href="contact">Contact Us</a></li>


                <?php
                if (isset($_SESSION['loggedin'])) {

                    echo '<a  id="nav-item-7" class="btn login-button" href="logout" role="button">Logout</a>';
                } else {

                    echo '<a  id="nav-item-8" class="btn login-button" href="login" role="button">Login</a>';
                    echo '<a  id="nav-item-9" class="btn join-button" href="signup" role="button">Join</a>';
                }
                ?>
            </ul>
        </nav>