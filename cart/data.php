<?php 
include('../db.php');
session_start();
date_default_timezone_set('Asia/Dhaka');
$timestamp=time()+(60*60*6);
    //if($timestamp==)
    $a=gmstrftime("%d %m %y %H:%M:%S",$timestamp);
$jim = new Shopping();
$q = $_GET['q'];
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array(); 
    $_SESSION['proID'] = 0;
}
if($q == 'addtocart'){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $jim->addtocart($product,$price,$qty);
}else if($q == 'emptycart'){
    unset($_SESSION['cart']); 
    unset($_SESSION['proID']); 
    header("location:../cart.php");
}else if($q == 'removefromcart'){
    $id = $_GET['id'];
    $jim->removefromcart($id);
}else if($q == 'updatecart'){
    $id = $_GET['id']; 
    $qty = $_POST['qty'];
    $jim->updatecart($id,$qty);
}else if($q == 'countcart'){
    $jim->countcart();
}else if($q == 'countorder'){
    $jim->countorder();
}else if($q == 'countproducts'){
    $jim->countproducts();
}else if($q == 'countcategory'){
    $jim->countcategory();
}else if($q == 'checkout'){
    $jim->checkout();
}else if($q == 'verify'){
    $jim->verify();   
}
else if($q=='user'){
    $jim->user();
}
else if($q=='registration'){
    $jim->registration();
}
else if($q=='change'){
    $jim->change();
}

/*$_SESSION['cart'];
$product = 'product101';
$price ='300';
$jim->addtocart($product, $price);*/
class Shopping {
    function addtocart($product, $price, $qty){
        $cart = array(
            'proID' => $_SESSION['proID'],
            'product' => $product,
            'price' => $price,
            'qty' => $qty
        );
        $_SESSION['proID'] = $_SESSION['proID'] + 1;
        array_push($_SESSION['cart'],$cart); 
        return true;
    }
    
    function removefromcart($id){        
        $_SESSION['cart'][$id]['qty'] = 0;
        header("location:../cart.php");
    }
    
    function updatecart($id,$qty){
        $_SESSION['cart'][$id]['qty'] = $qty;
       header("location:../cart.php");
    }
    
    function countcart(){
        $count = 0;
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
        foreach($cart as $row):
            if($row['qty']!=0){
                $count = $count + 1;
            }            
        endforeach;

        echo $count;   
    }
    function countorder(){
        $q = "select * from canteen.order where status='unconfirmed'";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function countproducts(){
        $q = "select * from products";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function countcategory(){
        $q = "select * from category";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function checkout(){
        include('../db.php');
        $id=$_SESSION['user1_id'];
        $sq="SELECT * FROM user WHERE id=$id";

        $result = mysql_query($sq);
        
        $row = mysql_fetch_array($result);
        
         $hall=$row['hall'];
         $room=$row['room'];

        $contact = $row['contact'];   
        $email = $row['email'];   
        $address = $hall.' '.$room;   
        $fullname = $row['name'];
        
        $item = '';
        foreach($_SESSION['cart'] as $row):
            if($row['qty'] != 0){
                $product = '('.$row['qty'].') '.$row['product'];
                $item = $product.', '.$item;
            }
        endforeach;
        $amount = $_SESSION['totalprice'];
        //echo $amount;
        echo $q = "INSERT INTO canteen.order VALUES (NULL, '$fullname', '$contact', '$address', '$email', '$item', '$amount', 'unconfirmed', NULL,'',$id)";
        //var_dump($q);
        if(mysql_query($q))
        
        unset($_SESSION['cart']); 
        header("location:../success.php");
  
    }
    function verify(){
        $username = $_POST['username'];   
        $password = $_POST['password'];   
        
        $q = "SELECT * from canteen.admin where username='$username' and password='$password'";
        $result = mysql_query($q);
        $_SESSION['login']='yes';
        echo mysql_num_rows($result);
    }
     function user(){
        $Id = $_POST['Id'];   
        $password = md5($_POST['password']);   
        
        $q = "SELECT * from user where id='$Id' and password='$password'";
        $result = mysql_query($q);
        $row = mysql_fetch_array($result);
        if(mysql_num_rows($result)>0){
        $_SESSION['userlogin']=$row['name'];
        $_SESSION['user1_id']=$row['id'];
        unset($_SESSION['login']);
         header("location:../index.php");
        }
        else {
            $_SESSION['loginfail']="Incorrect Username/Password";
            header("location:../loginfailed.php");
        }
    }
    function registration(){
        include('../db.php');
        include('loginfailed.php');
        $name=$_POST['name'];
        $id=$_POST['id'];
        $email=$_POST['email'];
        $hall=$_POST['hall'];
        $room=$_POST['room'];
        $contact=$_POST['contact'];
        $pass=$_POST['password'];
        $confirm=$_POST['confirm_password'];
        $remarks=0;
        $password=md5($pass);
        if($confirm==$pass){
        $q="INSERT INTO canteen.user (id,name,email,hall,room,contact,password,remarks) VALUES ('$id','$name','$email','$hall','$room','$contact','$password','$remarks')";
        }
        else {
            $_SESSION['notmatchpassword']="Password doesn't match with confirm password";
            header("location:../loginfailed.php");
        }
        if(mysql_query($q)){
            $_SESSION['userlogin']=$name;
            $_SESSION['user1_id']=$id;
            header("location:../index.php");

        }
        else {
            $_SESSION['registrationfail']="Regitration is not complete";
            header("location:../loginfailed.php");
        }
    }
//       function change(){
  //      include('../db.php');

//}
 
}
?>