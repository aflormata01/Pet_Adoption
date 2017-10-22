<?php
class peternity_model extends CI_model
{
	private $petrescued = "petrescued";
	private $faqs = "faqs";
	private $news = "news";
	
	
	public function create_faqs($data)
		{
			$this->db->insert($this->faqs, $data);
			return TRUE;	
		}
		public function update_faqs()
		{
			$this->db->where($data);
			$this->db->update($this->faqs, $data);
			return TRUE;	
		}
		public function del_faqs()
		{
			$this->db->where($data);
			$this->db->delete($this->faqs);
			return TRUE;	
		}
		public function read_faqs($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> faqs);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		}
		
		
		public function create_news($data)
		{
			$this->db->insert($this->news, $data);
			return TRUE;	
		}
		public function update_news()
		{
			$this->db->where($data);
			$this->db->update($this->news, $data);
			return TRUE;	
		}
		public function del_news()
		{
			$this->db->where($data);
			$this->db->delete($this->news);
			return TRUE;	
		}
		public function read_news($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> news);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array(); 
		}
		
		
		public function create_petrescued($data)
		{
			$this->db->insert($this->petrescued, $data);
			return TRUE;	
		}
		public function update_petrescued($data)
		{
			$this->db->replace($this->petrescued, $data);
			return TRUE;	
		}
		public function del_petrescued()
		{
			$this->db->where($data);
			$this->db->delete($this->petrescued);
			return TRUE;	
		}
		public function read_petrescued($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this->petrescued);
			 if ( isset($condition)) 
				 $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
<?