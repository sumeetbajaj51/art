<?php include("header.php"); ?>
  
   <section id="pricing">

      <div class="row section-intro">
         <div class="col-twelve with-bottom-line">

            <h5>Our Pricing</h5>
            <h1>Pick the best plan for you.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

         </div>         
      </div>

      <div class="row pricing-content">

         <div class="pricing-tables block-1-4 group">

            <div class="bgrid"> 

               <div class="price-block">

                  <div class="top-part">

                     <h3 class="plan-title">Starter</h3>
                     <p class="plan-price"><sup>$</sup>4.99</p>
                     <p class="price-month">Per month</p>
                     <p class="price-meta">Billed Annually.</p>

                  </div>                

                  <div class="bottom-part">

                     <ul class="features">
                        <li><strong>3GB</strong> Storage</li>
                        <li><strong>10GB</strong> Bandwidth</li>                       
                        <li><strong>5</strong> Databases</li>                       
                        <li><strong>30</strong> Email Accounts</li>
                     </ul>

                     <!-- <a class="button large" href="">Get Started</a> -->
<?php
$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypalId='sumeet.magento@gmail.com';
?>
                     <form action="<?php echo $paypalUrl; ?>" method="POST" name="frmPayPal1">
               <div class="panel price panel-red">
                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                      <input type="hidden" name="cmd" value="_xclick">
                      <input type="hidden" name="item_name" value="It Solution Stuff">
                      <input type="hidden" name="item_number" value="2">
                      <input type="hidden" name="amount" value="20">
                      <input type="hidden" name="no_shipping" value="1">
                      <input type="hidden" name="currency_code" value="INR">
                      <input type="hidden" name="cancel_return" value="http://localhost/artneticmedia/cancel.php">

 
                      <input type="hidden" name="return" value="http://localhost/artneticmedia/success.php">  
                      
                  <div class="panel-heading  text-center">
                  <h3>PRO PLAN</h3>
                  </div>
                  <div class="panel-body text-center">
                     <p class="lead" style="font-size:40px"><strong>$20 / month</strong></p>
                  </div>
                  <ul class="list-group list-group-flush text-center">
                     <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                     <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                     <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                  </ul>
                  <div class="panel-footer">
                     <button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
                  </div>
               </div>
            </form>
                  </div>

               </div>            
                        
            </div> <!-- /price-block -->

            <div class="bgrid">

               <div class="price-block primary">

                  <div class="top-part" data-info="recommended">

                     <h3 class="plan-title">Standard</h3>
                     <p class="plan-price"><sup>$</sup>9.99</p>
                     <p class="price-month">Per month</p>
                     <p class="price-meta">Billed Annually.</p>

                  </div>               

                  <div class="bottom-part">

                     <ul class="features">
                        <li><strong>5GB</strong> Storage</li>
                        <li><strong>15GB</strong> Bandwidth</li>                       
                        <li><strong>7</strong> Databases</li>                       
                        <li><strong>40</strong> Email Accounts</li>
                     </ul>

                     <a class="button large" href="">Get Started</a>

                  </div>
                  
               </div>                                

           </div> <!-- /price-block -->

           <div class="bgrid">               

               <div class="price-block">

                  <div class="top-part">

                     <h3 class="plan-title">Premium</h3>
                     <p class="plan-price"><sup>$</sup>19.99</p>
                     <p class="price-month">Per month</p>
                      <p class="price-meta">Billed Annually.</p>                    

                  </div> 
                  
                  <div class="bottom-part">

                     <ul class="features">
                        <li><strong>10GB</strong> Storage</li>
                        <li><strong>30GB</strong> Bandwidth</li>                       
                        <li><strong>15</strong> Databases</li>                      
                        <li><strong>60</strong> Email Accounts</li>
                     </ul>

                     <a class="button large" href="">Get Started</a>

                  </div>                                     
                  
               </div>                              

            </div> <!-- /price-block --> 

            <div class="bgrid">               

               <div class="price-block">

                  <div class="top-part">

                     <h3 class="plan-title">Ultimate</h3>
                     <p class="plan-price"><sup>$</sup>29.99</p>
                     <p class="price-month">Per month</p>
                     <p class="price-meta">Billed Annually.</p>                     

                  </div> 
                  
                  <div class="bottom-part">

                     <ul class="features">
                        <li><strong>20GB</strong> Storage</li>
                        <li><strong>40GB</strong> Bandwidth</li>                       
                        <li><strong>25</strong> Databases</li>                      
                        <li><strong>100</strong> Email Accounts</li>
                     </ul>

                     <a class="button large" href="">Get Started</a>

                  </div>                                     
                  
               </div>                              

            </div> <!-- /price-block -->           

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> 

<?php include("footer.php"); ?>
 