<?php
$type = $argv[1]; // id passed

$str_arr = explode ("/", $type);
$xmltocall = explode(".", $str_arr[1])[0];
if($xmltocall == ''){
    exit();
}
// echo $xmltocall;
// shell_exec('javac -cp "../lib/*" -d ../bin ../src/im_TestCases/*.java ../src/im_Core/*.java ../src/im_utils/*.java 2>/dev/null >/dev/null &');

shell_exec('javac -cp "../lib/*" -d ../bin ../src/im_TestCases/*.java ../src/im_Core/*.java ../src/im_utils/*.java ../src/im_MethodFactory/*.java 2>/dev/null >/dev/null');

shell_exec('java -cp "../bin:../lib/*" org.testng.TestNG ../testngXML/"'.$xmltocall.'"-testng.xml 2>/dev/null >/dev/null');

// shell_exec("java -cp ../bin:../lib/* org.testng.TestNG ../testngXML/$xmltocall-testng.xml");
exit();
?>