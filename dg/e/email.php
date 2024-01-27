

<?php

include 'head.php';
?>   



        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Email</h1>
                    <p>We are happy to see you are with us</p>
                </div>
                <div class="row g-4">
                   
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    
                    <p>In your given Email You will get a </p>
                    <h1 class="mb-3">One Time Password (OTP)</h1>   
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <form action="otp.php" name="form1" method="post" >
                                <div class="row g-3">
                                   
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <?php
include  "foot.php";
?>