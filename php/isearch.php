<?php
require_once("connection.php");
class Search{


 virtual function Search()=0;
}
$val1=new Search;
echo '<tt><pre>'.var_export($val1,true).'</pre></tt>';
?>