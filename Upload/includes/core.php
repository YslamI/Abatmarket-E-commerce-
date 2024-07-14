<?php
    require_once("database/connect.php");

    class Core
    {
        function sanitize($data)
        {
            global $database;
            return htmlentities(strip_tags(mysqli_real_escape_string($database->db_connect, $data)));
        }
        function category_exists($category_name)
        {
            global $database;
            $category_name = $this->sanitize($category_name);
            $query = "SELECT * FROM categories WHERE name='$category_name'";

            if($query_run = mysqli_query($database->db_connect, $query))
            {
                if(mysqli_num_rows($query_run) == NULL)
                {
                    return false;
                } else
                {
                    return true;
                }
            }
        }

        function get($table, $key=NULL, $val=NULL)
        {
            global $database;
            $data = array();
            $table = $this->sanitize($table);

            $query = "SELECT * FROM $table";

            if(isset($key) && isset($val))
            {
                $key = $this->sanitize($key);
                $val = (int)$val;

                $query .= " WHERE $key=$val ORDER BY ASC";
                if($query_run = mysqli_query($database->db_connect, $query))
                {
                    if(mysqli_num_rows($query_run) != NULL)
                    {
                        while($query_row = mysqli_fetch_assoc($query_run))
                        {
                            return $query_row;
                        }
                    }
                }
            } else
            {
                 $query .= " ORDER BY $key ASC";
                if($query_run = mysqli_query($database->db_connect, $query))
                {
                    if(mysqli_num_rows($query_run) != NULL)
                    {
                        while($query_row = mysqli_fetch_assoc($query_run))
                        {
                            $data[] = $query_row;
                        }
                    }
                    return $data;
                }
            }
        }

        function add($table, $add_data)
        {
            global $database;
            $table = $this->sanitize($table);

            foreach($add_data as $key => $val)
            {
                $val = $this->sanitize($val);
            }
            $keys = implode(", ", array_keys($add_data));
            $vals ="'" . implode("', '", array_values($add_data)) . "'";

            $query = "INSERT INTO $table ($keys) VALUES ($vals)";
            mysqli_query($database->db_connect, $query);
        }
        
        function get_good_by_id($key, $val)
        {
            global $database;
            $product= array();
            $key = $this->sanitize($key);
            $val = (int)$val;
    
            $query = "SELECT * FROM products WHERE $key=$val";
            if($query_run = mysqli_query($database->db_connect, $query))
             {
              if(mysqli_num_rows($query_run) != NULL)
              {
                while($query_row = mysqli_fetch_assoc($query_run))
                    {
                        $product[] = $query_row;
                    }
                }
                return $product;
             }
        }
    }

    $core = new Core();
?>