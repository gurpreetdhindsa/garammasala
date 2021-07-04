<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content=""; charset="UTF-8">
<meta charset="utf-8">
</head><body>
	<title> Print Table QR Code </title>
<style>
body {
width: 8.50in;
}
.label{
    width: 1.02in; /* plus .6 inches from padding */
	height: 1.02in; /* plus .125 inches from padding */
	padding: 0.04in 0.04in 0.10in;
	text-align: center;
	overflow: hidden;
	border: 1px dotted #000;
}   
 </style>
<?php $i=1;
foreach ($tables as  $value) {
 ?>
<div class="label" style="text-align: center;float: left">
    <?php if($value->name != '' || $value->name != NULL) 
        { ?>
        <img src="<?php echo $this->Common_model->qcode_function($value->name,'L',10); ?>" alt="Photo"> 
        <?php } ?>
        <p style="font-size:11px;margin:0;margin-top: 0px;font-weight: 600;text-align: center;">
    <?php if($value->name!='') echo "$value->name"; 
    if($online_order_setting_information->dine_in_enable_disable=='dine_in_enable')
    echo "<br>$online_order_setting_information->dine_in_code"; ?></p>
</div>
<?php $i++; } ?>
</body>
</html>