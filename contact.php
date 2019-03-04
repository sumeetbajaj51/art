<?php include("header.php"); ?>
  
   <section id="cta">

   	

   			
               <div class="headline"><h2>Contact Form</h2></div>
               <br>

               <form class="form-horizontal" action="http://localhost/artneticmedia/demo-contacts-process.php" method="post">
                     <div class="container">
                  <div class="row">
                     <label class="col-sm-2">Name</label>
                     <div class="col-sm-10">
                        
                              <input type="text" name="name" id="name" class="form-control">
                        
                     </div>
                     <br>
                     <label class="col-sm-2">Email</label>
                     <div class="col-sm-10">
                        
                        
                              <input type="text" name="email" id="email" class="form-control">
                        
                        
                     </div>
                     <br>
                     <label class="col-sm-2">Message</label>
                     <div class="col-sm-10">
                       
                              <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                       
                     </div>
                     <br>
                     <p><button type="submit" class="btn-u">Send Message</button></p>
                  </div>                  

               </div>   
               </form>
               
   	
   </section> 

<?php include("footer.php"); ?>
 