<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param   string|null    $type
 * @param   int            $id
 * @param   string|null    $attr
 * @return  array|null
 * 
 * @example  $foo = widget('image', 2, 'foo bar bass') 
 *           echo $foo['title']; 
 *           echo $foo[0]; 
 */

function widget($type = null, $id = 0, $attr = null)
{
	$CI =& get_instance();	
	$type = ucfirst($type);
	
	$content = null;
	$field['id']      = 0;
	$field['title']   = null;
	$field['type']    = null;
	$field['content'] = null;
	$field['active']  = null;
	$result = array_merge([$content], $field);
	
	$query = $CI->db->where('active', 'Y');
	if ($id > 0) $query = $CI->db->where('id', $id);
	$query = $CI->db->where('type', $type);
	$query = $CI->db->order_by('RAND()');
	$query = $CI->db->limit(1);
	$query = $CI->db->get('t_widget');
	$resQuery = $query->result_array();
	
	if ( count($resQuery) > 0 )
	{
		foreach ($resQuery as $val)
		{
			$row = $val;
		}
		
		$field = $row;
		
		switch ($type)
		{
			case 'Image':
				$content = '<a href="'.urldecode($field['url']).'" target="blank"><img src="'. post_images($field['content']) .'" '.$attr.'></a>';
			break;
			
			default:
				$content = html_entity_decode($row['content']);
			break;
		}
	}
	
	$result = array_merge([$content], $field);
	
	return $result;
}


