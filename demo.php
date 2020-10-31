<!doctype html>

<html lang="en">
<head>
  <title></title>
</head>

<body>



</body>
</html>

<?php

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




function dfs(Node $node, Node $destination, $path = '', $visited = array())
{
    $visited[] = $node->name;
    $not_visited = $node->not_visited_nodes($visited);
    $temp=0;
    if (empty($not_visited)) 
    {
        if($node->name==$destination->name)
        { $temp=1;}
        if($temp==1){
        echo 'path : ' . $path . ' >> ' . $node->name ."<br>";}
        
        return;
    }

    foreach ($not_visited as $n) dfs($n, $destination, $path . ' >> ' . $node->name, $visited);
}


$temp1=$_POST["source"];
$temp2=$_POST["destination"];

if($temp1=="srinagar")
    $source=$srinagar;
elseif($temp1=="ludhiana")
    $source=$ludhiana;
elseif($temp1=="jaipur")
    $source=$jaipur;
elseif($temp1=="ahmedabad")
    $source=$ahmedabad;
elseif($temp1=="mumbai")
    $source=$mumbai;
elseif($temp1=="bangalore")
    $source=$bangalore;
elseif($temp1=="kochi")
    $source=$kochi;
elseif($temp1=="chennai")
    $source=$chennai;
elseif($temp1=="vizag")
    $source=$vizag;
elseif($temp1=="durgapur")
    $source=$durgapur;
elseif($temp1=="guwahati")
    $source=$guwahati;
elseif($temp1=="lucknow")
    $source=$lucknow;
elseif($temp1=="gangtok")
    $source=$gangtok;



if($temp2=="srinagar")
    $destination=$srinagar;
elseif($temp2=="ludhiana")
    $destination=$ludhiana;
elseif($temp2=="jaipur")
    $destination=$jaipur;
elseif($temp2=="ahmedabad")
    $destination=$ahmedabad;
elseif($temp2=="mumbai")
    $destination=$mumbai;
elseif($temp2=="bangalore")
    $destination=$bangalore;
elseif($temp2=="kochi")
    $destination=$kochi;
elseif($temp2=="chennai")
    $destination=$chennai;
elseif($temp2=="vizag")
    $destination=$vizag;
elseif($temp2=="durgapur")
    $destination=$durgapur;
elseif($temp2=="guwahati")
    $destination=$guwahati;
elseif($temp2=="lucknow")
    $destination=$lucknow;
elseif($temp2=="gangtok")
    $destination=$gangtok;

dfs($source,$destination);
?>