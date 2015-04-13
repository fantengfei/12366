<?php
session_start();
define('IN_DOUCO', true);
$cat_id=$_SESSION['caidan'];
require(dirname(__FILE__) . '/include/init.php');
$param ='(';
foreach($cat_id as $r){
$param .=$r.',';
}

$param1=substr($param,0,-1);
$param1 .=')';

$sql = "SELECT * FROM " . $dou->table('article_category') . " WHERE cat_id in $param1";

$query = $dou->query($sql);
$list=array();
while($row=mysql_fetch_assoc($query)){
 $list[]=$row;

}

?>
<HTML>
<HEAD>
    <title>Contentbar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <LINK href="Inc/5.css" type="text/css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script>
//	  $(document).ready(
//	    function(){
//		 var a1=$('#a1 a');
//		 var Img1=$('img');
//		for(var i = 0 ; i<Img1.length;i++){
//		(function(k){
//		Img1[i].onclick=function(){
//		 alert(k);
//		a1[k+1].style.display="none";
//		}})(i+1);
//		}
//		}
//	  )
//	</script>
	<script>
	 window.onload=function(){
	   var a1=document.getElementById('a1');
	   var aa=a1.document.getElementsByTagName('a');
	   var Img1=document.getElementsByTagName('img');
	  
	   for(i = 0 ; i<Img1.length;i++){
		(function(k){
		Img1[i].onclick=function(){
		var name=$('input').val();
		 aa[i].href='right_info.htm';
		  $.post("destroy.php",
           {
             name:name
             },
  function(data,status){
  if(data){aa[k].style.display="none";}
  });
		
		}})(i+1);
		}
	 }
	 
	</script>
    <style type="text/css">
        <!--
        body {
            background-color: #e5edef;
			margin-right:16px;
			
        }

        .style2 {
            color: #ffff33
        }

        -->
    </style>
 
</HEAD>

<body leftMargin="0" topMargin="0" marginwidth="0" marginheight="0">
  <div class="beijing">
   
    <div class='mzy' id="mzy">
	<a href='right_info.htm' style=" font-size:12px;  background:url(images/mzy.gif) no-repeat; height:24px; display:block; padding-left:20px; margin-left:30px;" target="fraContent">我的主页</a>
	 <div class="xl" style="float:right; background:url(images/xl.gif) no-repeat; height:23px; width:17px;">
	  
	</div>
	<div id="a1">
	<?php if(!$list) exit; foreach($list as $v){ ?>
	 <input type="hidden" value="<?php echo $v['cat_id']  ?>">
	 <a href='table_list.php?id=<?php echo $v['cat_id']  ?>' style="font-size:12px; margin-left:10px; position:relative;cursor:default " target="fraContent" id="aa"><?php echo tool($v['cat_name'],0,5); ?><img src="images/cha.gif" style="position:absolute; right:2px; top:2px; float:left;" id="img1" style="cursor:pointer"></a>
	<?php } ?>
	</div>
	
	</div>
	
  </div>
  
</body>
</HTML>
