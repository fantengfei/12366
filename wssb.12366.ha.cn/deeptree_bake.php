<?php

define('IN_DOUCO', true);
require(dirname(__FILE__) . '/include/init.php');

?>
<html>
<head>
    <title>Contentbar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="StyleSheet" href="inc/dtree.css" type="text/css">
    <script type="text/javascript" src="inc/dtree.js"></script>
    <!-- <base target="fraContent" /> -->
</head>
<body style=" background:#e4eeef;padding-left:10px; border:1px #b8cfd7 solid; border-top:none;  overflow:hidden;" >

 <div style="border:1px #b8cfd7 solid; border-right:none; border-bottom:none;  margin-top:0px;  background:#FFFFFF repeat-x;">
<div class="dtree" style="height:460px; width:500px;">
    <script type="text/javascript">
        <!--
        d = new dTree('d');
 
d.add(0,-1,'');
 
<?php 

$query = $dou->query("SELECT * FROM article_category ORDER BY sort ASC");
      
while ($row = $dou->fetch_array($query)){
    $list[] = array(
        'id' => $row['cat_id'], 
        'pid' => $row['pid'], 
        'enable' => $row['enable'], 
        'title' => $row['cat_name'], 
        'url' => 'table_list.do?id='.$row['cat_id']
    );
}

foreach ($list as $item) {
    if ($item['enable']) {
        echo "d.add(".$item['id'].",".$item['pid'].",'".$item['title']."','".$item['url']."');";
    }else{
        echo "d.add(".$item['id'].",".$item['pid'].",'".$item['title']."','javascript:void(0);');";
    };

}
?> 
d.config.folderLinks=false;
d.config.target='fraContent'; 
document.write(d);
 
        //-->
    </script>

</div>
   
</body>
</html>