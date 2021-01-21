<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesold.css">
    <link rel="stylesheet" href="css/mycss.css">
    <!-- endbuild -->
    <title>TravelGo: Your Smart TravelMate</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="45" width="280"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./payment.html"><span class="fa fa-money fa-lg"></span> Transaction</a></li>
                </ul>
<!--                 <label>
                    &nbsp;
                    <span class="navbar-text">
                        <a role="button" id="loginModal2">
                            <span class="fa fa-sign-in"></span><b>Login</b>
                        </a>
                    </span>

                    <span class="navbar-text">
                        <a role="button" id="siginModal2">
                            <span class="fa fa-sign-in"></span><b>Signup</b>
                        </a>
                    </span>
                </label> -->
            </div>
        </div>
    </nav>
<!--     <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            Modal content
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div id="signinModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            Modal content
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Signup</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="first name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="middle name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="middlename" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="last name"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="contact number"></label>
                                <input type="text" class="form-control form-control-sm mr-1" id="contactnumber" placeholder="Contact Number">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>TravelGo</h1>
                    <p>The sky is the limit! We will show you the world. Sandy beaches to snowy peaks. Get with us and get away.</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <ol class="col-12 breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item">Different Route</li>
                    </ol>
                    <h3>Different Route</h3>
                    <hr>
                </div>
            </div>
        </div>
    </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project001";
$conn = new mysqli($servername, $username, $password, $dbname);


$srinagar = new Node('srinagar');
$ludhiana = new Node('ludhiana');
$jaipur = new Node('jaipur');
$ahmedabad = new Node('ahmedabad');
$mumbai = new Node('mumbai');
$bangalore = new Node('bangalore');
$kochi = new Node('kochi');
$chennai = new Node('chennai');
$vizag = new Node('vizag');
$durgapur = new Node('durgapur');
$guwahati = new Node('guwahati');
$lucknow = new Node('lucknow');
$gangtok = new Node('gangtok');


$srinagar->link_to($ludhiana);
$ludhiana->link_to($jaipur);
$jaipur->link_to($ahmedabad);
$ahmedabad->link_to($mumbai);
$mumbai->link_to($bangalore);
$bangalore->link_to($kochi);
$kochi->link_to($chennai);
$chennai->link_to($vizag);
$vizag->link_to($durgapur);
$durgapur->link_to($guwahati);
$guwahati->link_to($gangtok);
$gangtok->link_to($lucknow);
$lucknow->link_to($srinagar);
$jaipur->link_to($kochi);
$mumbai->link_to($lucknow);
$ahmedabad->link_to($lucknow);
$mumbai->link_to($vizag);
$lucknow->link_to($vizag);

$total_cost=0;
$prevnode=new Node('');

$temp1=$_POST["source"];
$temp2=$_POST["destination"];

$source=$$temp1;
$destination=$$temp2;

$myarray = array();

dfs($source,$destination);

class Node
{
    public $name;
    public $linked = array();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function link_to(Node $node, $also = true)
    {
        if (!$this->linked($node)) $this->linked[] = $node;
        if ($also) $node->link_to($this, false);
        return $this;
    }

    private function linked(Node $node)
    {
        foreach ($this->linked as $l) { if ($l->name === $node->name) return true; }
        return false;
    }

    public function not_visited_nodes($visited_names)
    {
        $ret = array();
        foreach ($this->linked as $l) {
            if (!in_array($l->name, $visited_names)) $ret[] = $l;
        }
        return $ret;
    }
}

function dfs(Node $node, Node $destination, $path = '', $visited = array())
{
    global $conn, $total_cost, $prevnode, $myarray;

    $visited[] = $node->name;
    $not_visited = $node->not_visited_nodes($visited);

    if($node->name==$destination->name)
    {
        foreach ($myarray as $city) 
        {
            echo '<span id=special style="margin: 5px; padding: 5px; border-radius: 5px; text-transform: capitalize; ">'.$city.'</span>';
            echo '->';
        }
        echo $node->name."<b>Total Cost: </b>";
        // echo 'path : ' . $path . ' ' . $node->name ."<b>Total Cost: </b>";
        echo  $total_cost."<br><br>";
        return;
    }

    foreach ($not_visited as $n) 
    {  
        $a=$node->name;
        $b=$n->name;        

        $sql = "SELECT * from path where source='$a' and destination='$b'";
        $result = $conn->query($sql);
        $numrows=mysqli_num_rows($result);

        if($numrows==0)
        {
            $sql = "SELECT * from path where source='$b' and destination='$a'";
            $result = $conn->query($sql);
        }

        while($row = $result->fetch_assoc())
            $total_cost+=$row["cost"];

        array_push($myarray,$node->name);
        dfs($n, $destination, $path . ' ' . $node->name, $visited);
        array_pop($myarray);

        $sql = "SELECT * from path where source='$a' and destination='$b'";
        $result = $conn->query($sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==0)
        {
            $sql = "SELECT * from path where source='$b' and destination='$a'";
            $result = $conn->query($sql);
        }   
        while($row = $result->fetch_assoc())
            $total_cost-=$row["cost"];
    }
}
?>
<br>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                   <!--  <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        Mumbai<br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:travelgo.gmail.com">travelgo.gmail.com</a>
                    </address> -->
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            <!-- </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2018 Travel Go</p>
                </div>
            </div> -->
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <!-- build:js js/main.js -->
   
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- endbuild -->
</body>

</html>

