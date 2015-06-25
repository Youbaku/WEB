<?php

/******************** PAGE DETAILS ********************/
/* @Programmer  : Guppy Org.
 * @Maintainer  : Guppy Org.
 * @Created     : 15/06/2015
 * @Modified    : 
 * @Description : This is the place class.
********************************************************/ 

    
class Place{
        
        // --- THIS VALUES SAME WITH yb_places TABLE ---
        public $plc_id;
        public $plc_name;
        public $plc_header_image;
        public $plc_email;
        public $plc_contact;
        public $plc_website;
        public $plc_intime;
        public $plc_outtime; 
        public $plc_Hours;
        public $plc_country_id;
        public $plc_state_id;
        public $plc_city;
        public $plc_address;
        public $plc_meta_description;
        public $plc_keywords;
        public $plc_zip;
        public $plc_latitude;
        public $plc_longitude;
        public $plc_menu;
        public $plc_info_title;
        public $plc_info;        
        public $plc_is_active;
        public $plc_is_delete;
        
        // --- THIS VALUES ARE ADDITIONAL --- 
        public $header_img_directory;
        public $feature_id;
        public $feature_title;
        public $cat_parent_id;
        public $pcat_name;                
        public $plc_gallery_media;                
        public $plc_country_name;        
        public $plc_state_name;               
        public $plc_avg_rating; 
        
        // --- THIS VALUES ARE RELEVANT WITH OTHER TABLES ---
        public $rating = Array();
        
        /*******************************************
         ************** CONSTRUCTOR ****************
         ******************************************/
        function __construct() {
            
        }                
                
        
        
        /**
         * 
         */
        function setPlaceObjectCoreVariables($place){
            $this->plc_id = $place->plc_id;            
            $this->plc_name = $place->plc_name;
            $this->plc_header_image = $place->plc_header_image;            
            $this->plc_email = $place->plc_email;
            $this->plc_contact = $place->plc_contact;
            $this->plc_website = $place->plc_website;
            $this->plc_intime = $place->plc_intime;
            $this->plc_outtime = $place->plc_outtime;
            $this->plc_Hours = $place->plc_Hours;            
            $this->plc_country_id = $place->plc_country_id;
            $this->plc_state_id = $place->plc_state_id;
            $this->plc_city = $place->plc_city;
            $this->plc_address = $place->plc_address;
            $this->plc_meta_description = $place->plc_meta_description;
            $this->plc_keywords = $place->plc_keywords;            
            $this->plc_zip = $place->plc_zip;
            $this->plc_latitude = $place->plc_latitude;
            $this->plc_longitude = $place->plc_longitude;
            $this->plc_menu = $place->plc_menu;
            $this->plc_info_title = $place->plc_info_title;
            $this->plc_info = $place->plc_info;
            $this->plc_is_active = $place->plc_is_active;
            $this->plc_is_delete = $place->plc_is_delete;
        }
        
    }


?>

