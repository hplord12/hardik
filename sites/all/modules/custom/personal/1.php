<?php

$query = db_select('personal','s')  
  ->fields('s',array('age','mobile','name','birthdate','area'))
  ->fields('n',array('city_name','city_code'))
    
  ->condition('s.name',$_GET['0'],'=')
   ->condition('n.city_code',$_GET['1'],'=');
    
    
$query->join('city','n','s.city_code = n.city_code');

$result = $query->execute()->fetchAll();