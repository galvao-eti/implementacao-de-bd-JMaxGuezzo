<?php

declare(strict_types=1);

require 'Abstraction/BancoDeDados.php';

class Usuario implements PosAlfa\Abstraction\BancoDeDados
{

    const DSN = 'mysql:host=localhost;dbname=alfa2019galvao';
    const USER = 'root';
    const PASS = '';

    public $id;
    public $nome;
    public $telefone;
    public $email;

    public function getID()
    {
        return $this->id;
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function connect(string $dsn, string $user, string $pass): \PDO
    {
        return $conexao = new \PDO($dsn, $user, $pass);
    }
    public function prepare(\PDO $pdo, string $sql): \PDOStatement
    {
        return $pdo->prepare($sql);
    }

    public function searchAllData()
    {
        try {
            $pdo = $this->connect(self::DSN, self::USER, self::PASS);
            $sql = $this->prepare($pdo, 'SELECT * FROM usuario');
            $sql->execute();

            while ($dados = $sql->fetch(PDO::FETCH_OBJ)) {

                $id = $dados->id;
                $nome = $dados->nome;
                $telefone = $dados->telefone;
                $email = $dados->email;

                echo
                    "
                <tbody>
                    <tr>
                        <td> $id </td>
                        <td> $nome</td>
                        <td> $telefone</td>
                        <td> $email</td>
                    </tr>
                </tbody>
                ";
            }
        } catch (PDOException $error) {
            echo 'Erro: ' . $error->getMessage();
        }
    }
}
