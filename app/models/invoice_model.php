<?php
class Invoice_model extends CI_Model{
	function Invoice_model(){
		parent::__construct();
	} 
	
	function add_invoice(){	
		extract($this->input->post());
		for($i=0;$i<count($product);$i++){			
			$p_id[$i]=substr($product[$i],strpos($product[$i],"=")+1);
			$query = $this->db->get_where('tbl_product', array('id' => $p_id[$i]));
			$result=$query->result_array();
			$current_stock= $result[0]['current_stock'] - $qty[$i];
			$product_id[$i]=$result[0]['id'];
			$data1 = array(
			'current_stock'=>$current_stock
			  );
			$this->db->where('id', $p_id[$i]);
			$this->db->update('tbl_product', $data1);
			$data2= array(
			'product_id'=>$result[0]['id'],
			'supplier_id'=>$result[0]['supplier_id'],
			'purchase_price'=>$result[0]['purchase_price'],
			'selling_price'=>$result[0]['selling_price'],
			'stock'=>$current_stock
			);
			$this->db->insert('tbl_product_history',$data2);
			
			$earning=($result[0]['selling_price']-$result[0]['purchase_price'])*$qty[$i];
			$data3=array(
			'product_id'=>$result[0]['id'],
			'category_id'=>$result[0]['category_type'],
			'supplier_id'=>$result[0]['supplier_id'],
			'qty_sold'=>$qty[$i],
			'earning'=>$earning,
			'date'=>$current_date
			);
			$this->db->insert('tbl_sales',$data3);
		}
		
		$product_id=implode(",",$product_id);
		$product_qty=implode(",",$qty);
		$product_price=implode(",",$price);
		$product_total=implode(",",$total);
		$data = array(
		'client_name'=>$client_name,
		'mobile'=>$client_mobile,
		'invoice_amt'=>$total_all,
		'advance'=>$advance,
		'discount'=>$discount,
		'balance'=>$grand_total,
		'product_id'=>$product_id,
		'product_qty'=>$product_qty,
		'product_price'=>$product_price,
		'product_total'=>$product_total,
		'date'=>$current_date,
		'remark'=>$remark
		  );
		 $this->db->insert('tbl_invoices',$data);	
		 return $this->db->insert_id();
	}
	
	function invoice_update(){
		//$advance=$this->input->post('paid')+$this->input->post('advance');
		$data = array(
		'discount'=>$this->input->post('discount'),
		'advance'=>$this->input->post('advance'),
		'balance'=>$this->input->post('grand_total')
		  );
		$this->db->where('invoice_id', $this->input->post('invoice_id'));
		$this->db->update('tbl_invoices', $data);
		redirect('invoices/view_invoice/'.$this->input->post('invoice_id'));
	}
	
	function invoice_detail($id){
		$query = $this->db->get_where('tbl_invoices', array('invoice_id' => $id));
		return $query->result_array();
	}
	
	function product_name(){
		//$this->db->select('id, name');
		//$query = $this->db->get('tbl_product');
		//return $query->result_array();
		
		$query=$this->db->query("SELECT p.id AS id,p.name AS name, c.name AS category
									FROM tbl_product AS p
									JOIN tbl_category AS c ON p.category_type = c.id
								");
		return $query->result_array();						
	}
	
	function next_invoice_id(){	
		$next = $this->db->query('SHOW TABLE STATUS LIKE "tbl_invoices"');
		$next = $next->row(0);
		$next->Auto_increment;
		return $next->Auto_increment;
	}
	
	function invoice_list(){
		$query=$this->db->get('tbl_invoices');
		return $query->result_array();
	}
	
	function invoicedelete($id){
		$this->db->delete('tbl_invoices', array('invoice_id' => $id));
		redirect('invoices/manageinvoice','refresh'); 
	}
	
	function invoice_due_list(){
		$query=$this->db->select("*")->from('tbl_invoices')->where('balance >',0)->get(); 
		return $query->result_array();
	}
	
	function invoice_paid_list(){
		$query=$this->db->select("*")->from('tbl_invoices')->where('balance =',0)->get();
		return $query->result_array();
	}
	function invoice_product_suggest($my_data){
		$query=$this->db->query("SELECT p.id AS product_id,p.name AS product, c.name AS category
									FROM tbl_product AS p
									JOIN tbl_category AS c ON p.category_type = c.id
									AND (
									p.name LIKE  '%$my_data%'
									OR p.item_bar_code LIKE  '%$my_data%'
									)
									ORDER BY p.name
									LIMIT 10");
		return $query->result_array();
	}
	function product_detail($product_id){
		$query = $this->db->get_where('tbl_product', array('id' => $product_id));
		return $query->result_array();
	}

	function getsettings(){
	    $sql="select * from tbl_settings where id=1 ";
	    $query=$this->db->query($sql);
	    $result=$query->result_array();
	    return $result;
	 }

}

?>