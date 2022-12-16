<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class BookingCont extends Controller{
    public function bookingdone(){
        echo "<p>Name - </p>" ;
        echo $_POST['name'];
        echo "<p>Email - </p>" ;
        echo $_POST['email'];
        echo "<p>Message - </p>" ;
        echo $_POST['message'];
        echo "<p>Your appointment has been booked </p>" ;
            
    }
}