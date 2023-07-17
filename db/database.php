<?php

class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'mydatabase');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
        else
        {
           // echo "connected";
        }
	}
    
    public function sanitize($var)
	{
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

    public function vendorReq($orgName, $firstName, $lastName, $contactNo) {
        $orgName = mysqli_real_escape_string($this->connection, $orgName);
        $firstName = mysqli_real_escape_string($this->connection, $firstName);
        $lastName = mysqli_real_escape_string($this->connection, $lastName);
        $contactNo = mysqli_real_escape_string($this->connection, $contactNo);
    
        $sql = "INSERT INTO new_vendors_listing (org_name, first_name, last_name, contact_no) VALUES ('$orgName', '$firstName', '$lastName', '$contactNo')";
        $res = mysqli_query($this->connection, $sql);
    
        if ($res) {
            // Form submission successful
            echo "<script>alert('Thank you for your submission! Please wait for admin approval.');</script>";
            return true;
        } else {
            // Form submission failed
            echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
            return false;
        }
    }

    public function readVendorRequests() {
        $sql = "SELECT * FROM new_vendors_listing";
        // $sql = "SELECT * FROM new_vendors_listing where status = 'pending' ";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

    public function approveVendorRequest($requestID) {
        $sql = "UPDATE new_vendors_listing SET status = 'approved' WHERE id = '$requestID'";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            // echo "<script>alert('Vendor request approved.');</script>";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
            return false;
        }
    }

    public function rejectVendorRequest($requestID) {
        $sql = "UPDATE new_vendors_listing SET status = 'rejected' WHERE id = '$requestID'";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            // echo "<script>alert('Vendor request rejected.');</script>";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
            return false;
        }
    }


    public function createVendor($name, $email, $password, $contactNumber) {
        // Check if the contact number has an approved status in the new_vendors_listing table
        $contactNumber = $this->sanitize($contactNumber);
        $query = "SELECT status FROM new_vendors_listing WHERE contact_no = '$contactNumber'";
        $result = mysqli_query($this->connection, $query);
    
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $status = $row['status'];
    
                if ($status === 'approved') {
                    // Insert the vendor account into the database
                    $name = $this->sanitize($name);
                    $email = $this->sanitize($email);
                    $password = $this->sanitize($password);
                    
                    $query = "INSERT INTO vendors (name, email, password, contact_no) VALUES ('$name', '$email', '$password', '$contactNumber')";
                    $insertResult = mysqli_query($this->connection, $query);
    
                    if ($insertResult) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return "pending";
                }
            } else {
                return "pending";
            }
        } else {
            return false;
        }
    }
    
    public function Vendorlogin($email, $password) {
        $email = $this->sanitize($email);
        $password = $this->sanitize($password);

        $query = "SELECT * FROM vendors WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($this->connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Login successful
            // You can perform additional actions here, such as setting session variables
            return true;
        } else {
            return "Invalid email or password";
        }
    }
    

    public function close_db() {
        mysqli_close($this->connection);
    }
    
}

$database = new Database();
?>