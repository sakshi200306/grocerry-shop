<?php
include "header.php";
?>
<section class="contact section-padding layout-padding">
                <div class="container px-0">
                    <div class="heading_container">
                       <h2>
                        contact us
                       </h2>
                    </div>
</div>
<div class="container container-bg">
                    <div class="row">
                         <div class="col-lg-6  col-12">
                            <h2 class="mb-4">Let's <span>begin</span></h2>

                            <form action="contactsave.php" method="post">

                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                    <label for="name">Full name</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                    <label for="email">Email address</label>
                                </div>
                                
                                <div class="form-floating my-4">
                                    <input type="message" name="message" id="message"class="form-control" placeholder="message" required>

                                    <label for="message">Message</label>
                                </div> 

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                    <label for="message">Tell us about the project</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                    <button type="submit" name="submit" class="form-control">Submit</button>
                                </div>
                            </form>   
                        </div>
                        <div class="col-lg-6 px-0">
          <div class="map_container">
            <div class="map-responsive" style="height:500px;">
              <iframe  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
                    </div>    
                </div>
            </section>
        </main>
        </div>
        

     <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>
<?php
include "footer.php";
?>






