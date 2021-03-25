<?php


class Task3
{
    /** @var PDO */
    private static $_pdo;

    public static function getConnection()
    {
        try {
            self::$_pdo = new \PDO('mysql:host=localhost;dbname=task_3', 'root', 'root');
            echo 'ok';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return self::$_pdo;
    }

    public function fetchAll()
    {
        Task3::getConnection();

        $pdo = self::$_pdo->prepare("SELECT * FROM companies");
        $pdo->execute();
        return $pdo->fetchAll(PDO::FETCH_ASSOC);

    }

    public function fetchOne($id)
    {
        Task3::getConnection();
        $pdo = self::$_pdo->prepare("SELECT * FROM companies WHERE companie_id = :id ORDER BY office");
        $pdo->execute([':id' => $id]);

        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchCity($city)
    {
        Task3::getConnection();

        $pdo = self::$_pdo->prepare("SELECT * FROM companies WHERE city = :city ORDER BY name");
        $pdo->execute([':city' => $city]);

        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchOffices($name, $city)
    {
        Task3::getConnection();

        $pdo = self::$_pdo->prepare("SELECT * FROM companies WHERE name = :name AND city = :city");
        $pdo->execute(['name'=>$name,':city' => $city]);

        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }
}

$task_3 = new Task3();

var_dump($task_3->fetchAll());
var_dump($task_3->fetchOne(1));
var_dump($task_3->fetchCity('san-francisco'));
var_dump($task_3->fetchOffices('Apple','san-francisco'));