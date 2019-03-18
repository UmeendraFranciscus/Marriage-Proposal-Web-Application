<?php

define("ENCRYPTION_KEY", "!@#$%^&*");

class Model_Account extends CI_Model {

    private $table = "login";
    private $username = '';
    private $password;

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function save() {

        $data = array(
        'username' => $this->getUsername(),
        'password' => $this->encrypt($this->getPassword(), "praneeth1234"),
        'date' => date("Y/m/d")
        );

        $this->db->insert($this->table, $data);
        
        
        
        
    }

    public function load() {

        $this->db->select('*');
        $this->db->where('user_name', $this->getUsername());
        $this->db->from($this->table);
        return $this->db->get();
    }

//    $string = "This is the original data string!";
//
//    echo $encrypted = encrypt($string, ENCRYPTION_KEY);
//    echo "<br />";
//    echo $decrypted = decrypt($encrypted, ENCRYPTION_KEY);

    /**
     * Returns an encrypted & utf8-encoded
     */
    function encrypt($pure_string, $encryption_key) {
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
        return $encrypted_string;
    }

    /**
     * Returns decrypted original string
     */
    function decrypt($encrypted_string, $encryption_key) {
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
        return $decrypted_string;
    }

}

?>