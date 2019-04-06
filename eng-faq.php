<!DOCTYPE html>
<html>
<head>
<style>
button.accordion {
    background-color: #736a6a;
    color: #D6A916;
    border-bottom: 6px solid #C39971;
    cursor: pointer;
    padding: 18px;
    width: 45%;
    text-align: center;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color:#736a6a ;
}
</style>
</head>
<body>

<?php include 'header.php'; ?>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-9 col-sm-12 m_bottom_13 m_sm_bottom_30">
							<div class="clearfix">
								<h2 style="color:white;">FAQ ?</h2></br>
								<h2 style="color:white;">VALUE TO KNOW - CATERING</h2>
								<div  style="color:#FFFFFF;">
									<br>
									<button class="accordion">Vegetarian?</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
										<p>Bernard would like to make a vegetarian buffet upon request.</p>
									</div>
										
									<button class="accordion">Allergiker?</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>If you have allergy sufferers in your company, we can tell which dishes contain any allergens.
									Buffet can be organized as needed and you have special wishes for the food, we are welcome to this.
									For guests with allergies such as lactose or gluten intolerance we are also extremely flexible and would like to prepare some alternative dishes.
									We do everything we can to adapt to your company.</p>
										</div>
									
									<button class="accordion">When can I last order?</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>Catering can be ordered as a whole until 5 working days before the food is to be used.
									Call and hear if it is possible to order one of the catering buffet.
									Our menus must be ordered at least 2 weeks in advance.</p>
										</div>
									
									<button class="accordion">I want my food delivered?</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>	You can pick up the food yourself or have it delivered to the door all over Zealand.
									We deliver all over Zealand. The delivery price depends on the postal code and delivery date.
									Prices start from DKK 350.</p></br>
										</div>
									
									<button class="accordion">Delivery Tighten:</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>
									We deliver within a range of approx. 60 minutes. 
									That is, if you order delivery until kl. 14, we will endeavor to deliver it to you between kl. 1:00 p.m. to 2:00 p.m.</p>
										</div>	
								
									
									<button class="accordion">How do I receive the food?</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>	All our food is served on white porcelain and in bowls. We prioritize the overall impression so it is important for us that the food is served tastefully and that it looks delicious.
									All of our services are for lending and should of course be returned. Please do so yourself, and the agreement is that you will return the service the next working day after the event.
                                    Delayed and it has been serviced by the customer at our cost. We reserve the right to take a deposit of 900 kr as you get back when returning china, toast and other.
										</div>
								
						
									<button class="accordion">Prices & Payment</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>		Net cash on delivery, unless otherwise agreed. Unfortunately, we do not receive Dankort on delivery</p>
										</div>
									
									
									<button class="accordion">Changes </button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>	All changes are sent to <a href="mailto:info@taste-bistro-patisserie.dk">info@taste-bistro-patisserie.dk </a>from which you will always receive a confirmation. 
									This confirmation is the customer's receipt and should be saved until the change is billed by Taste. 
									Changes / cancellations, etc. must be made in writing no later than 5 days before delivery.
									We reserve the right to charge full price for the number of persons / envelopes and possibly. ordered chefs or serving staff after this date.</p>
										</div>
									
									<button class="accordion">CHEFS</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>	If you want a chef for your event, the price is 350 kr. hour in min. 4 hours. The chef needs a stove and oven that works.</p>
										</div>
								
								
									<button class="accordion">SERVING STAFF??</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>If you want dining staff for your event, the price is 250 kr. hour in min. 4 hours.</p>
										</div>
								
								
								
									<button class="accordion">Contact Us Today</button>
									<div class="panel" style="width:45%; border-bottom: 6px solid #C39971;">
									
									<p>If you have any questions, please feel free to contact us. We strive to answer your questions as soon as possible.
									And please give an explanation if there is something you are in doubt about.
										</div>
									
									<button class="accordion"><a href="/cake_bistro/catering.php">Back To Catering Menu</a></button>									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php include 'footer.php'; ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>

</body>
</html>