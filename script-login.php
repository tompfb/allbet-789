<?php
@$memberid=$_SESSION["UserID"];
$name_link ="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_POST['register'])){
    echo "<script type='text/javascript'>";
    echo "window.location='http://aff.789first.com/aff/9709606/other';";
    echo "</script>";
}
if(isset($_POST['contact'])){
    echo "<script type='text/javascript'>";
    echo "window.location='http://aff.789first.com/aff/9709606/other';";
    echo "</script>";
}
if(isset($_POST['create-post'])){
    $name=strtolower($_POST["name"]);
    $pass=strtolower($_POST["pass"]);
    $str=$name;
    $num="0,1,2,3,4,5,6,7,8,9";
    $strlen=strlen($str);
    $TxtOnly=""; 
    $NumOnly="";
    for($i=0;$i<$strlen;$i++){
        $item=substr($str,$i,1);
        if(strstr($num,$item)){
            $TxtOnly.=$item;
        }else{
            $NumOnly.=$item;
        }
    }
    $textname = $NumOnly;
    if ($textname=="vip") {
        echo "<script type='text/javascript'>";
        echo "window.location='http://app.789first.com/authenticate?url=redirecturl&username=$name&password=$pass&hash=d894d29c3bc4b40f2d261a7fe2a3b59d';";
        echo "</script>";
    }
    elseif ($textname=="goal") {
        echo "<script type='text/javascript'>";
        echo "window.location='http://app.789first.com/authenticate?url=redirecturl&username=$name&password=$pass&hash=d894d29c3bc4b40f2d261a7fe2a3b59d';";
        echo "</script>";
    }
    elseif ($textname=="fc") {
        echo "<script type='text/javascript'>";
        echo "window.location='http://app.789first.com/authenticate?url=redirecturl&username=$name&password=$pass&hash=d894d29c3bc4b40f2d261a7fe2a3b59d';";
        echo "</script>";
    }
    elseif ($textname=="maxx") {
        echo "<script type='text/javascript'>";
        echo "window.location='http://app.789first.com/authenticate?url=redirecturl&username=$name&password=$pass&hash=d894d29c3bc4b40f2d261a7fe2a3b59d';";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('กรุณาสมัครสมาชิกก่อน !! (เข้าสู่ระบบ)');";
        echo "window.location = 'http://aff.789first.com/aff/9709606/other'; ";
        echo "</script>";
    }
}
?>