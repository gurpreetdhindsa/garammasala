<link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url() ?>assets/color/spectrum.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/color/spectrum.js"></script>
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-timepicker/css/timepicker.min.css">
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<style type="text/css">
    .required_star{
        color: #dd4b39;
    }

    .radio_button_problem{
        margin-bottom: 19px;
    }
    .radio_button_problem a svg{
        stroke: #00c0ef;
        width: 22px;
        position: relative;
        top: 7px;
        left: 5px;
    }
</style> 
<?php
if ($this->session->flashdata('exception')) {

    echo '<section class="content-header"><div class="alert alert-success alert-dismissible"> 
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><i class="icon fa fa-check"></i>';
    echo $this->session->flashdata('exception');
    echo '</p></div></section>';
}
?> 
<section class="content-header">
    <h1>
        <?php echo "Online and Self Order Setting"; ?>
    </h1>

</section>

<!-- Main content --> 
<section class="content">
    <div class="row">

        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
                <!-- /.box-header -->
                <!-- form start -->
                <?php 
                $attributes = array('id' => 'online_and_self_order_setting_form', 'enctype'=>'multipart/form-data');
                echo form_open(base_url('Order/onlineAndSelfOrderSetting/' . $encrypted_id),$attributes); ?> 
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                             <p style="color: #E04F54; font-weight: bold; font-size: 18px;">Order Page Setting </p>
                             <hr/>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 15px">
                        <div class="col-md-4"> 
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Base Color'; ?> <span class="required_star">*</span></label>
                                <input tabindex="1" type="text" id="base_color" name="base_color" class="form-control" placeholder="<?php echo 'Base Color'; ?>" value="<?php echo $online_order_setting_information->base_color; ?>"> 
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="To match the order page base color with your website">
                                <i data-feather="help-circle"></i>
                                </a> 
                            </div>
                            <?php if (form_error('base_color')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('base_color'); ?></p>
                                </div>
                            <?php } ?>
                           
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group radio_button_problem" style="overflow: hidden;">
                                <label><?php echo 'Logo'; ?> (Width: 140px & Height: 50px,Type:JPG,PNG) <span class="required_star"></span></label>  
                                <input type="file"  style="width: 70%;float: left;" name="logo" class="form-control" id="logo" placeholder="<?php echo 'Logo'; ?>"> 
                                <input tabindex="8" autocomplete="off" type="hidden" name="logo_p" class="form-control"  value="<?php echo $online_order_setting_information->logo; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer;float: left;width: 15%;" data-original-title="For the order page">
                                <i data-feather="help-circle"></i>
                                </a> 
                                <a style="cursor: pointer;float: left;width: 15%;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm"><?php echo 'Show'; ?></a>
                            </div>
                            <?php if (form_error('logo')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;overflow: hidden;">
                                    <p><?php  if(isset($exception_err)) echo $exception_err; ?></p>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group radio_button_problem" style="overflow: hidden;">
                                <label><?php echo 'Favicon'; ?> (Width: 16px & Height: 16px,Type:ico) <span class="required_star"></span></label>  
                                <input type="file"  style="width: 70%;float: left;" name="favicon" class="form-control" id="favicon" placeholder="<?php echo 'Favicon'; ?>"> 
                                <input tabindex="8" autocomplete="off" type="hidden" name="favicon_p" class="form-control"  value="<?php echo $online_order_setting_information->favicon; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer;float: left;width: 15%;" data-original-title="For the order page">
                                <i data-feather="help-circle"></i>
                                </a> 
                                <a style="cursor: pointer;float: left;width: 15%;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm1"><?php echo 'Show'; ?></a>
                            </div>
                            <?php if (isset($exception_err1)) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;overflow: hidden;">
                                    <p><?php  if(isset($exception_err1)) echo $exception_err1; ?></p>
                                </div>
                            <?php } ?>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">  
                            <div class="form-group">
                                <label><?php echo 'Site Title'; ?> <span class="required_star">*</span></label>
                                <input tabindex="3" type="text" id="site_title" name="site_title" class="form-control" placeholder="<?php echo 'Site Title'; ?>" value="<?php echo $online_order_setting_information->site_title; ?>">
                            </div>
                            <?php if (form_error('site_title')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('site_title'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group">
                                <label><?php echo 'Email'; ?> <span class="required_star">*</span></label>
                                <input tabindex="3" type="text" id="email" name="email" class="form-control" placeholder="<?php echo 'Email'; ?>" value="<?php echo $online_order_setting_information->email; ?>">
                            </div>
                            <?php if (form_error('email')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('email'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group">
                                <label><?php echo 'Phone Number'; ?> <span class="required_star">*</span></label>
                                <input tabindex="3" type="text" id="phone_number" name="phone_number" class="form-control" placeholder="<?php echo 'Phone Number'; ?>" value="<?php echo $online_order_setting_information->phone_number; ?>">
                            </div>
                            <?php if (form_error('phone_number')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('phone_number'); ?></p>
                                </div>
                            <?php } ?> 
                            <div class="alert alert-error" style="padding: 5px !important;display:none;" id="address_error">
                                <p>The Address field is required.</p>
                            </div> 
                        </div> 

                    </div> 

                    <div class="row"> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Facebook Link'; ?><small> (Leave blank if you dont want to share)</small></label>
                                <input tabindex="4" type="text" id="facebook_link" name="facebook_link" class="form-control" placeholder="<?php echo 'Facebook Link'; ?>" value="<?php echo $online_order_setting_information->facebook_link; ?>">
                            </div>
                            <?php if (form_error('facebook_link')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('facebook_link'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Twitter Link'; ?><small> (Leave blank if you dont want to share)</small></label>
                                <input tabindex="4" type="text" id="twitter_link" name="twitter_link" class="form-control" placeholder="<?php echo 'Twitter Link'; ?>" value="<?php echo $online_order_setting_information->twitter_link; ?>">
                            </div>
                            <?php if (form_error('twitter_link')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('twitter_link'); ?></p>
                                </div>
                            <?php } ?>  
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Pinterest Link'; ?><small> (Leave blank if you dont want to share)</small></label>
                                <input tabindex="4" type="text" id="pinterest_link" name="pinterest_link" class="form-control" placeholder="<?php echo 'Pinterest Link'; ?>" value="<?php echo $online_order_setting_information->pinterest_link; ?>">
                            </div>
                            <?php if (form_error('pinterest_link')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('pinterest_link'); ?></p>
                                </div>
                            <?php } ?>  
                        </div> 

                    </div>
                    
                    <div class="row">  
                        <div class="col-md-4">
                            <div class="form-group radio_button_problem">
                                <a href="<?php echo base_url(); ?>Order/setOpeningClosingTime/<?php echo $this->session->userdata('company_id') ?>" target="_blank" class="btn btn-primary"><?php echo 'Set Opening and Closing Time for Your Restaurant'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>  
                    </div> 
                    <div class="row">  
                        <div class="col-md-2">
                            <div class="form-group radio_button_problem">
                                <a href="#" target="_blank" class="btn btn-primary"><?php echo 'Button 1'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group radio_button_problem">
                                <a href="#" target="_blank" class="btn btn-primary"><?php echo 'Button 2'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group radio_button_problem">
                                <a href="#" target="_blank" class="btn btn-primary"><?php echo 'Button 3'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group radio_button_problem">
                                <a href="#" target="_blank" class="btn btn-primary"><?php echo 'Button 4'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group radio_button_problem">
                                <a href="#" target="_blank" class="btn btn-primary"><?php echo 'Button 5'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="XXXXXXXXXXXXXXX">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>  
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                             <p style="color: #E04F54; font-weight: bold; font-size: 18px;">Delivery Setting</p>
                             <hr/>
                        </div>
                    </div>

                    <div class="row"> 

                        <div class="col-md-4">
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Enable/Disable'; ?> <span class="required_star"></span></label>  
                                <div class="radio">
                                    <label> 
                                        <input tabindex="5" type="radio" name="delivery_enable_disable" id="delivery_enable_disable_yes" value="delivery_enable" 
                                        <?php
                                        if ($online_order_setting_information->delivery_enable_disable == "delivery_enable") {
                                            echo "checked";
                                        };
                                        ?>
                                        >Enable </label>
                                    <label>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                                        <input tabindex="6" type="radio" name="delivery_enable_disable" id="delivery_enable_disable_no" value="delivery_disable" 
                                        <?php
                                        if ($online_order_setting_information->delivery_enable_disable == "delivery_disable" || $online_order_setting_information->delivery_enable_disable != "delivery_enable") {
                                            echo "checked";
                                        };
                                        ?>
                                        >Disable 
                                    </label>
                                </div>
                            </div>
                            <?php if (form_error('delivery_enable_disable')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('delivery_enable_disable'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>  
                        
                    </div>

                    <div class="row"> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem" style="overflow: hidden;">
                                <label><?php echo 'Delivery Charge'; ?></label>
                                <input style="float: left;width: 90%" tabindex="4" type="text" id="delivery_charge" name="delivery_charge" class="form-control" placeholder="<?php echo 'Delivery Charge'; ?>" value="<?php echo $online_order_setting_information->delivery_charge; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer;float: left;width: 10%" data-original-title="Write simple number if it is fixed, write a percentage after number like 10% if it is percentage basis">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                            <?php if (form_error('delivery_charge')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;overflow: hidden;">
                                    <p><?php echo form_error('delivery_charge'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Delivery Opening Time'; ?></label>
                                <input tabindex="4" type="text" id="delivery_opening_time" name="delivery_opening_time" class="form-control timepicker" placeholder="<?php echo 'Delivery Opening Time'; ?>" value="<?php echo $online_order_setting_information->delivery_opening_time; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="When you start taking delivery orders"></i>
                                </a>
                            </div>
                            <?php if (form_error('delivery_opening_time')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('delivery_opening_time'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>
                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Delivery Closing Time'; ?></label>
                                <input tabindex="4" type="text" id="delivery_closing_time" name="delivery_closing_time" class="form-control timepicker" placeholder="<?php echo 'Delivery Closing Time'; ?>" value="<?php echo $online_order_setting_information->delivery_closing_time; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="When you stop taking delivery orders"></i>
                                </a>
                            </div>
                            <?php if (form_error('delivery_closing_time')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('delivery_closing_time'); ?></p>
                                </div>
                            <?php } ?>
                        </div>  
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label>&nbsp;</label><br>
                                <a href="" target="_blank" class="btn btn-primary"><?php echo 'Choose Deliverable Menus'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="Choose that which food items you take for delivery amoung all of your food items">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?php echo 'Who will get Delivery Order Notification'; ?></label>
                                <select class="form-control select2" id="delivery_order_user_id" name="delivery_order_user_id" style="width: 100%;">
                                    <option value=""><?php echo lang('select'); ?></option>
                                    <?php foreach ($users as $value) { ?>
                                        <option <?= isset($online_order_setting_information) && $online_order_setting_information->delivery_order_user_id == $value->id ? 'selected' : '' ?> value="<?= $value->id ?>"><?= $value->full_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php if (form_error('delivery_order_user_id')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('delivery_order_user_id'); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                             <p style="color: #E04F54; font-weight: bold; font-size: 18px;">Dine-in Setting</p>
                             <hr/>
                        </div>
                    </div>

                    <div class="row"> 

                        <div class="col-md-4">
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Enable/Disable'; ?> <span class="required_star"></span></label>  
                                <div class="radio">
                                    <label> 
                                        <input tabindex="5" type="radio" name="dine_in_enable_disable" id="dine_in_enable_disable_yes" value="dine_in_enable" 
                                        <?php
                                        if ($online_order_setting_information->dine_in_enable_disable == "dine_in_enable") {
                                            echo "checked";
                                        };
                                        ?>
                                        >Enable </label>
                                    <label>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                                        <input tabindex="6" type="radio" name="dine_in_enable_disable" id="dine_in_enable_disable_no" value="dine_in_disable" 
                                        <?php
                                        if ($online_order_setting_information->dine_in_enable_disable == "dine_in_disable" || ($online_order_setting_information->dine_in_enable_disable != "dine_in_enable")) {
                                            echo "checked";
                                        };
                                        ?>
                                        >Disable 
                                    </label>
                                </div>
                            </div>
                            <?php if (form_error('dine_in_enable_disable')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('dine_in_enable_disable'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>  
                        
                    </div> 

                    <div class="row"> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem" style="overflow: hidden;">
                                <label><?php echo 'Dine-in Code'; ?></label>
                                <input style="float: left;width: 90%" tabindex="4" type="text" id="dine_in_code" name="dine_in_code" class="form-control" placeholder="<?php echo 'Dine-in Code'; ?>" value="<?php echo $online_order_setting_information->dine_in_code; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer;float: left;width: 10%" data-original-title="So that no one can place dine-in order from outside of the restaurant, print it and place on tablel, please change it in daily basis">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                            <?php if (form_error('dine_in_code')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;overflow: hidden;">
                                    <p><?php echo form_error('dine_in_code'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div> 

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label>&nbsp;</label><br>
                                <a href="<?php echo base_url(); ?>Order/printTableQRcode/<?php echo $this->session->userdata('company_id') ?>" target="_blank" class="btn btn-primary"><?php echo 'Print Table QR Code'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="So that customer can place Dine-in order by scanning table QR Code">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>  

                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem">
                                <label>&nbsp;</label><br>
                                <a href="<?php echo base_url(); ?>Order/printMenuNameQRcode/<?php echo $this->session->userdata('company_id') ?>" target="_blank" class="btn btn-primary"><?php echo 'Print Menu Name with QR Code'; ?></a>
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer" data-original-title="So that customer can place order by scanning Food Menu QR Code">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                        </div>  

                    </div> 

                    <div class="row"> 

                        <div class="col-md-4">
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Allow to select table manually'; ?> <span class="required_star"></span></label>  
                                <div class="radio">
                                    <label> 
                                        <input tabindex="5" type="radio" name="mst" id="mst_yes" value="msty" 
                                        <?php
                                        if ($online_order_setting_information->mst == "msty") {
                                            echo "checked";
                                        };
                                        ?>
                                        >Yes </label>
                                    <label>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                                        <input tabindex="6" type="radio" name="mst" id="mst_no" value="msto" 
                                        <?php
                                        if ($online_order_setting_information->mst == "msto" || ($online_order_setting_information->mst != "msty" && $online_order_setting_information->mst != "msto")) {
                                            echo "checked";
                                        };
                                        ?>
                                        >No 
                                    </label>
                                </div>
                            </div>
                            <?php if (form_error('mst')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('mst'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>   

                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?php echo 'Order Notification'; ?> <span class="required_star"></span></label>
                                <select class="form-control select2" id="dion" name="dion" style="width: 100%;">
                                    <option value=""><?php echo lang('select'); ?></option>  
                                    <option <?= isset($online_order_setting_information) && $online_order_setting_information->dion == 'dionn'? 'selected' : '' ?> value="dionn">Order Will Go Directly to Kitchen</option>
                                    <option <?= isset($online_order_setting_information) && $online_order_setting_information->dion == 'diony'? 'selected' : '' ?> value="diony">Someone will decide from POS Screen</option>

                                </select>
                            </div>
                            <?php if (form_error('dion')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('dion'); ?></p>
                                </div>
                            <?php } ?> 
                        </div> 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?php echo 'Who will get Dine-in Order Notification'; ?></label>
                                <select class="form-control select2" id="dine_in_order_user_id" name="dine_in_order_user_id" style="width: 100%;">
                                    <option value=""><?php echo lang('select'); ?></option>
                                    <?php foreach ($users as $value) { ?>
                                        <option <?= isset($online_order_setting_information) && $online_order_setting_information->dine_in_order_user_id == $value->id ? 'selected' : '' ?> value="<?= $value->id ?>"><?= $value->full_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php if (form_error('dine_in_order_user_id')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('dine_in_order_user_id'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-12">
                             <p style="color: #E04F54; font-weight: bold; font-size: 18px;">Take Away Setting</p>
                             <hr/>
                        </div>
                    </div>

                    <div class="row"> 

                        <div class="col-md-4">
                            <div class="form-group radio_button_problem">
                                <label><?php echo 'Enable/Disable'; ?> <span class="required_star"></span></label>  
                                <div class="radio">
                                    <label> 
                                        <input tabindex="5" type="radio" name="take_away_enable_disable" id="take_away_enable_disable_yes" value="take_away_enable" 
                                        <?php
                                        if ($online_order_setting_information->take_away_enable_disable == "take_away_enable") {
                                            echo "checked";
                                        };
                                        ?>
                                        >Enable </label>
                                    <label>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                                        <input tabindex="6" type="radio" name="take_away_enable_disable" id="take_away_enable_disable_no" value="take_away_disable" 
                                        <?php
                                        if ($online_order_setting_information->take_away_enable_disable == "take_away_disable" || ($online_order_setting_information->take_away_enable_disable != "take_away_enable")) {
                                            echo "checked";
                                        };
                                        ?>
                                        >Disable 
                                    </label>
                                </div>
                            </div>
                            <?php if (form_error('take_away_enable_disable')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('take_away_enable_disable'); ?></p>
                                </div>
                            <?php } ?> 
                        </div>  
                        
                    </div>

                    <div class="row">
                        <div class="col-md-4">  
                            <div class="form-group radio_button_problem" style="overflow: hidden;">
                                <label><?php echo 'Take Away Code'; ?></label>
                                <input style="float: left;width: 90%" tabindex="4" type="text" id="take_away_code" name="take_away_code" class="form-control" placeholder="<?php echo 'Take Away Code'; ?>" value="<?php echo $online_order_setting_information->take_away_code; ?>">
                                <a class="top" title="" data-placement="top" data-toggle="tooltip" style="cursor: pointer;float: left;width: 10%" data-original-title="So that no one can place take away order from outside of the restaurant, print it and place on necessary place, please change it in daily basis">
                                <i data-feather="help-circle"></i>
                                </a>
                            </div>
                            <?php if (form_error('take_away_code')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;overflow: hidden;">
                                    <p><?php echo form_error('take_away_code'); ?></p>
                                </div>
                            <?php } ?> 
                            
                        </div>  

                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?php echo 'Who will get Take Away Order Notification'; ?></label>
                                <select class="form-control select2" id="take_away_order_user_id" name="take_away_order_user_id" style="width: 100%;">
                                    <option value=""><?php echo lang('select'); ?></option>
                                    <?php foreach ($users as $value) { ?>
                                        <option <?= isset($online_order_setting_information) && $online_order_setting_information->take_away_order_user_id == $value->id ? 'selected' : '' ?> value="<?= $value->id ?>"><?= $value->full_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php if (form_error('take_away_order_user_id')) { ?>
                                <div class="alert alert-error" style="padding: 5px !important;">
                                    <p><?php echo form_error('take_away_order_user_id'); ?></p>
                                </div>
                            <?php } ?> 

                        </div>

                    </div>
         

                </div>


                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary"><?php echo lang('submit'); ?></button> 
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div> 
</section>
<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo 'Logo'; ?></h4>


            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-12" style="text-align: center;">
              <?php
                    if($online_order_setting_information->logo):
                ?>
                    <img src="<?=base_url()?>assets/images/<?=$online_order_setting_information->logo?>">
                <?php
                endif;
                ?>
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<div class="modal fade" id="modal-sm1">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo 'Favicon'; ?></h4>


            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-12" style="text-align: center;">
              <?php
                    if($online_order_setting_information->favicon):
                ?>
                    <img src="<?=base_url()?>assets/images/<?=$online_order_setting_information->favicon?>">
                <?php
                endif;
                ?>
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 
<script>

    $(document).ready(function(){ 

    

        $('.timepicker').timepicker({
            showInputs: false
        })

        $("#base_color").spectrum({
            color: "<?php if($online_order_setting_information->base_color) echo $online_order_setting_information->base_color;else echo '#212529'; ?>",
            showInput: true,
            className: "full-spectrum",
            showInitial: true,
            showPalette: true,
            showSelectionPalette: true,
            maxSelectionSize: 10,
            preferredFormat: "hex",
            localStorageKey: "spectrum.demo",
            move: function (color) {
                $('.colorclass').css('background-color',color.toRgbString());  
                $('.template_bg_color').val(color.toRgbString());
            },
            show: function () {
    
            },
            beforeShow: function () {
    
            },
            hide: function () {
    
            },
            change: function() {
        
            },
            palette: [
                ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
                    "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
                ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
                    "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
                ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
                    "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
                    "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
                    "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
                    "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
                    "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
                    "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
                    "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
                    "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
                    "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
            ]
        }); 



    });
</script>