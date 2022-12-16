<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</head>
<body>
    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">
                        
                        <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                    
                        <form role="form" action="<?php echo base_url(); ?>/BookingCont/booked" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="date" name="date" id="date" value="" class="form-control">
                                    
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="site-footer section-padding" id="contact">
        <div class="container my-4">
            <div class="row">

                <div class="col-lg-5 me-auto col-12 my-4">
                    <h5 class="mb-lg-4 mb-3">Opening Hours</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            Sunday : Closed
                        </li>

                        <li class="list-group-item d-flex">
                            Monday, Tuesday - Firday
                            <span>8:00 AM - 3:30 PM</span>
                        </li>

                        <li class="list-group-item d-flex">
                            Saturday
                            <span>10:30 AM - 5:30 PM</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                    <h5 class="mb-lg-4 mb-3">Our Clinic</h5>

                    <p><a href="mailto:healthinfo@gmail.com">healthinfo@gmail.com</a></p><p>

                    </p><p>123 Digital Art Street, San Diego, CA 92123</p>
                </div>

              

               

            </div>
        
    </div></footer>
</body>
</html>