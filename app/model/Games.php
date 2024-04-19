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

    public static function getBetStatusCount(string $gameId, string $drawPeriod, string $status): int {
        $table = GameData::getGameTableMap()[$gameId]['bet_table'];
        $query = "SELECT COUNT(*) AS TOTALCOUNT FROM $table WHERE draw_period = ? AND bet_status = ?";
        $stmt = Database::open()->prepare($query);
        $stmt->bindParam(1, $drawPeriod);
        $stmt->bindParam(2, $status);
        $stmt->execute();
        $totalCount = $stmt->fetchColumn();
        $stmt->closeCursor();
        return (int) $totalCount;
    }

    public static function getDrawPeriod(string $gameId, string $dateCreated) : mixed {
        $table = GameData::getGameTableMap()[$gameId]['draw_table'];
        $query = "SELECT * FROM $table WHERE date_created = ?";
        $stmt = Database::open()->prepare($query);
        $stmt -> bindParam(1,$dateCreated);
        $stmt -> execute();
        return $stmt->fetchAll();

    }
     
}