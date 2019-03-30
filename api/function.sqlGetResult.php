<?php
function sqlGetResult($stmt) {    
    $result = array();    
    $stmt->store_result();    
    for ($i = 0; $i < $stmt->num_rows; $i++) {
        $metadata = $stmt->result_metadata(); 
        $params = array();       
        while($field = $metadata->fetch_field()) { 
            $params[] = &$result[$i][$field->name];
        }        
        call_user_func_array(array($stmt, 'bind_result'), $params);    
        $stmt->fetch();    
    }   
    $stmt->free_result();
return $result;
}
?>