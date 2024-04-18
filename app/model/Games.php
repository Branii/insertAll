<?php 
//require __DIR__ . '/autoload.php';
class Games extends Database {

    public static function getAllinfo(string $gameId) : array {

        $table = GameData::getGameTableMap()[$gameId]['bet_table'];
        $query = "SELECT * FROM $table";
        $stmt = Database::open()->prepare($query);
        $stmt -> execute();
        return $stmt->fetchAll();

    }

    public static function getbetStatus(string $gameId, string $drawperiod, string $status) : array {

        $table = GameData::getGameTableMap()[$gameId]['bet_table'];
        $query = "SELECT * FROM $table WHERE $drawperiod = ? AND $status = ?";
        $stmt = Database::open()->prepare($query);
        $stmt -> bindParam(1,$drawperiod);
        $stmt -> bindParam(2,$status);
        $stmt -> execute();
        return $stmt->fetchAll();

    }

    public static function getDrawPeriod(string $gameId, string $dateCreated) : mixed {

        $table = GameData::getGameTableMap()[$gameId]['draw_table'];
        $query = "SELECT * FROM $table WHERE date_created = '2024-04-19'";
        $stmt = Database::open()->prepare($query);
        //$stmt -> bindParam(1,$dateCreated);
        $stmt -> execute();
        return $stmt->fetchAll();

    }
     
}