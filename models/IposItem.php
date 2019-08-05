<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItem extends Model {
	protected $fillable = [
		'name', 
		'category', 
		'supplier_id', 
		'item_number', 
		'description', 
		'cost_price', 
		'unit_price', 
		'whole_price', 
		'reorder_level', 
		'receiving_quantity', 
		'item_id', 
		'pic_filename', 
		'allow_alt_description', 
		'is_serialized', 
		'stock_type', 
		'item_type', 
		'tax_category_id', 
		'deleted', 
		'pack', 
		'expiry_days', 
		'period', 
		'custom3', 
		'custom4', 
		'custom5', 
		'custom6', 
		'custom7', 
		'custom8', 
		'custom9', 
		'custom10', 
		'slug', 
		'image1', 
		'thumb1', 
		'small1', 
		'image2', 
		'thumb2', 
		'small2', 
		'image3', 
		'thumb3', 
		'small3', 
		'image4', 
		'thumb4', 
		'small4', 
		'created_at', 
		'updated_at', 
		'prescriptions', 
		'grammage', 
		'formulation', 
		'shelf', 
		'company', 
		'apply_vat', 
	];
}
