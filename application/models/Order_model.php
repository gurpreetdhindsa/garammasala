<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_model
 *
 * @author user
 */
class Order_model extends CI_Model {
   

    public function getAllByTable($table_name) {
        $result = $this->db->query("SELECT * 
          FROM $table_name 
          WHERE del_status = 'Live'  
          ORDER BY id DESC")->result();
        return $result;
    }
    public function getInfoByID($table_name) {
        $result = $this->db->query("SELECT * 
          FROM $table_name 
          WHERE  del_status = 'Live'  
          ORDER BY id DESC")->row();
        return $result;
    }




    public function getMenuByMenuName($menu_name){
      $this->db->select("*");
      $this->db->from('tbl_food_menus');
      $this->db->where("tbl_food_menus.name", $menu_name);
      $this->db->order_by('id', 'ASC');
      return $this->db->get()->row();      
    }

   


}

?>
