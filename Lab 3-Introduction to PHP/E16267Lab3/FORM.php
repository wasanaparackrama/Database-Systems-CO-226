<!DOCTYPE html>
<html>
<style>
body{

  line-height: 2.6;

}
div{
	line-height: normal;
	font-style: italic;

}
h1{
	line-height: normal;
}
p{
    line-height: normal;
    font-style: italic;
  
}
body{
	margin:0 auto;
	width:600px;
	height: 550px;
	border: 3px solid black;
	padding: 30px;
	margin-top: 20px;
}

</style>


<body>
<h1>Your Information System</h1>
Thank you,<?php 

echo " ". $_POST["firstname"]; ?> for your purchase from our website<br>
your item colour is: <?php echo $_POST["colours"]; ?> & T-shirt size:<?php echo $_POST["size"]; ?> <br>
Selected item/items are:<br>
*
<?php
if(empty($_POST["item1"]) && empty($_POST["item2"]) ) {
        echo "There no selected items";

    }elseif(empty($_POST["item2"])) {
       
        echo $_POST["item1"];
        
       }
      elseif(empty($_POST["item1"])) {
       
        echo $_POST["item2"];
        
       }
       else{
       	echo $_POST["item1"]." & ";
       	echo $_POST["item2"];
       }



?> <br>
your item will be send to:<br>
<div>
<?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?> ,<br>

<?php echo $_POST["address1"]; ?>, <br>

<?php
if(empty($_POST["address2"])) {
        echo "There no second Adress";

    }else{
        echo $_POST["address2"];
    }
         ?>, <br>
<?php
if(empty($_POST["address3"])) {
        echo "There no Third Adress";

    }else{
        echo $_POST["address3"];
    }
         ?>, <br>
</div>

Thank you for submitting you comments.We appriciate it.You said:<br>

<p><?php echo $_POST["comments"]; ?> <br></p>

</body>
</html>