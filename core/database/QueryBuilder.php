<?php


class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function select($table, $column, $email){
        $stmt = $this->pdo->query("SELECT {$column} FROM {$table} WHERE email='".$email."'");

      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectUserData($table, $column, $id){
        $stmt = $this->pdo->query("SELECT {$column} FROM {$table} WHERE user_id='".$id."'");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function selectPost(  $id){
        $stmt = $this->pdo->query("SELECT * FROM post WHERE target_profile_id='".$id."'");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
//    public function deleteEntry($table, $data)
//    {
//        $query = "UPDATE {$table} SET {$data['row']} = IF({$data['row']} = 0, 1, 0) WHERE id = :id ";
//        $stmt = $this->pdo->prepare($query);
//        $stmt->bindParam(":id" , $data['id'], PDO::PARAM_INT);
//        $stmt->execute();
//
//        return $this->selectAll($table);
//    }
//
    public function addUser($table, $email, $pass){

            $innerData = [
                'email' => $email,
                'password' => $pass

            ];

            $query = "INSERT INTO {$table} (email, password ) VALUES (:email, :password)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($innerData);


        return 'Check DB!' ;
    }
    function get_user_profile_id($id){
        $stmt = $this->pdo->query("SELECT id FROM user_profile WHERE user_id='".$id."'");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    function get_post_data($id)
    {
        $stmt = $this->pdo->query("SELECT * FROM post WHERE target_profile_id='".$id."'");
        $stmt->execute();
        $result= $stmt->fetchAll(PDO::FETCH_ASSOC);
//        $result = ["Response"=>$stmt  ];

        return json_encode($result);
    }


}