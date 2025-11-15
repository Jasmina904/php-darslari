<?php
echo date(format: "y.m.d")."br";
echo date(format: "y.m.d")."br";
echo date(format: "d.m.y")."br";
echo date(format: "d.m.y")."br";
echo date(format: "y/m/d")."br";
echo date(format: "d/m/y")."br";
date_default_timezone_set(timezone:"Asia/tashkent");
//time()
echo time()."br";
echo date(format:'d.m.y')."br";
echo date(format:'d.m.y', timestamp: str)


//unix time
echo "unix time:".time()."<br>";
echo "unix time". strtotime(datetime:"2025-11-14") ."<br>"
//15.11.2025
echo strtotime(datetime:"+7 days"). "<br>";
echo date(format)

?>