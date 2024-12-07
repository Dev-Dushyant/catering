<?php
// DB function is defined to create an instance of a class that extends mysqli
function DB($table, $pk = 'id')
{
    // Returning an anonymous class that extends the mysqli class
    return new class($table, $pk) extends mysqli {
        
        // Private properties to store the table name and primary key field
        private $table, $pk;
        
        // Constructor that initializes the database connection and table/primary key properties
        public function __construct($table, $pk)
        {
            // Parent constructor to create the database connection to localhost using 'root' as the username and an empty password
            parent::__construct('localhost', 'root', '', 'catering');
            
            // Set the table and primary key for the instance
            $this->table = $table;
            $this->pk = $pk;
        }
        
        // The save method either inserts or updates data in the specified table
        public function save(array|object $data, $id = null)
        {
            // SQL query to insert new data into the table
            $sql = "insert into $this->table set ";
            
            // Variable to store where clause in case of an update
            $wh = "";
            
            // If an ID is provided, the query becomes an update query
            if ($id) {
                // SQL query to update existing data in the table
                $sql = "update $this->table set ";
                // Add the WHERE condition to the query based on the primary key
                $wh = " where $this->pk=$id";
            }
            
            // Loop through the data array and append each column and value to the SQL query
            foreach ($data as $colname => $value) {
                $sql .= "$colname='". addslashes($value)."',"; // Append each column-value pair
            }
            
            // Remove the trailing comma at the end of the SQL query
            $sql = substr($sql, 0, -1) . $wh;
            
            // Execute the query. If it's successful, return the ID of the newly inserted or updated record
            if ($this->query($sql)) {
                return $id ?? $this->insert_id; // Return the given ID for updates, or the auto-generated insert ID
            }
        }
        public function all($cols="*",$order=""){
            if(!$order){
                $order="$this->pk desc";
            }
            $sql="select $cols from $this->table order by $order";
            return $this->query($sql)?->fetch_all(MYSQLI_ASSOC);
        }
        public function find($id,$cols="*"){
            $sql="select $cols from $this->table where $this->pk=$id";
            return $this->query($sql)?->fetch_assoc();
        }
        public function delete($ids){
            $sql="delete from $this->table where $this->pk in($ids)";
            return $this->query($sql);
        }
    };
}
