<?php 

class User{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $image;
    public $bio;
    public $token;

    public function getFullName($user) {
        return $user->name . " " . $user->lastname; // juntando o nome completo
      }

    public function generateToken(){
        return bin2hex(random_bytes(50)); //bin2hex retorna string e damos uma outra função 
    }                                     // random que retorna outra string com 50 caracteres 
    
    public function generatePassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function imageGenerateName() {
        return bin2hex(random_bytes(60)) . ".jpg";
      }
}

interface UserDAOInterface {
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user);    
    public function verifyToken($protected = false);//verificar o usuário, pois a rota não é protegida
    public function setTokenToSession($token, $redirect = true); // redireciona o usuario pagina especifica
    public function authenticateUser($email, $password);
    public function findByEmail($email); // encontrar usuario por email
    public function findById($id);
    public function findByToken($token);
    public function destroyToken();
    public function changePassword(User $user);
}



?>