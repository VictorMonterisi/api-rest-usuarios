<?php

    namespace Victo\ApiRestExercicio\Models;

    class Usuario
    {
        private static $tabela = 'usuarios';

        public static function selectUsuario(int $id)
        {
            $connPDO = new \PDO(DBDRIVE.': host ='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '. self::$tabela . ' WHERE id = :id';
            $stmt = $connPDO->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0) {
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception('Nenhum usuário encontrado!');
            }
        }

        public static function selectTodosUsuarios()
        {
            $connPDO = new \PDO(DBDRIVE.': host ='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '. self::$tabela . ' ORDER BY id DESC';
            $stmt = $connPDO->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception('Nenhum usuário encontrado!');
            }
        }
    }