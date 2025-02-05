<? 


class Doctor extends User {

    public function __construct($db, $userData = null) {
        $this->db = $db; 
        if ($userData) {
            $this->id = $userData['id'] ?? null;
            $this->username = $userData['username'] ?? null;
            $this->email = $userData['email'] ?? null;
            $this->role = $userData['role'] ?? null;
            $this->status = $userData['status'] ?? null;
        }
    }





}