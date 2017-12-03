<?php
	$conn   = mysql_connect("localhost","root","");
	$sel_db = mysql_select_db("student");
	class db{
		private function insert($inp,$tab)
		{
				$colname=implode(array_keys($inp),"`,`");
				$values=implode($inp,"','");
				$sql = "INSERT INTO  `".$tab."` (`".$colname."`) VALUES ('".$values."')";
				mysql_query($sql);
		}
		public function student_entry($post)
		{
			$table ='student_entry';
			$data['name']=$this->validate($post['name']);
			$data['sub']=$this->validate($post['sub']);
			$data['class']=$this->validate($post['class']);
			$data['mob']=$this->validate($post['mob']);
			$this->insert($data,$table);
		}
		public function validate($str)
		{
			return mysql_real_escape_string($str);
		}

	}
?>	