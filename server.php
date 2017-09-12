<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
echo "<b>====================================OPERATING SYSTEM====================================</b><br><br>";
echo php_uname();
echo "<br><br><b>====================================PHP USER====================================</b><br><br>";
echo exec("whoami");
echo "<br><br><b>====================================SERVER LOAD====================================</b><br><br>";
$load = sys_getloadavg();
echo "<b>Usage </b>";
echo ($load[0])*100;
echo "%";
if($load[0] > 0.8){
	echo "<br><b style='color:red;'>Server Overloaded</b><br>";
}
$core_nums=trim(shell_exec("grep -P '^physical id' /proc/cpuinfo|wc -l"));
echo "<br><b>CORS </b>".$core_nums;
echo "<br><br><b>====================================RAM====================================</b><br><br>";
echo shell_exec("free -m");
