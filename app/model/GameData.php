<?php 

class GameData {

    
public static function getGameTableMap(): array { // all geme tables

    $json = '{
        "1": {
            "draw_table": "draw_numbers",
            "bet_table": "bet",
            "seconds_tbl": "1k1min"
        },
        "3": {
            "draw_table": "dt_royal10",
            "bet_table": " bt_royal10",
            "seconds_tbl": "1k1min"
        },
        "4": {
            "draw_table": "dt_1kb5d1m",
            "bet_table": "bt_1kb5d1m",
            "seconds_tbl": "1k1min"
        },
        "5": {
            "draw_table": "dt_luckypick5",
            "bet_table": "bt_luckypick5",
            "seconds_tbl": "3minstbl"
        },
        "6": {
            "draw_table": "dt_1kball1min",
            "bet_table": "bt_1kball1min",
            "seconds_tbl": "1k1min"
        },
        "7": {
            "draw_table": "dt_speedy1min",
            "bet_table": "bt_speedy1min",
            "seconds_tbl": "1k1min"
            
        },
        "8": {
            "draw_table": "dt_speedy5d3min",
            "bet_table": "bt_speedy5d3min",
            "seconds_tbl": "3minstbl"
        },
        "9": {
            "draw_table": "dt_Lucky5D15mins",
            "bet_table": "bt_Lucky5D15mins",
            "seconds_tbl": "1_5min"
        },
        "10": {
            "draw_table": "dt_Fast31min",
            "bet_table": "bt_Fast31min",
            "seconds_tbl": "1k1min"
        },
        "11": {
            "draw_table": "dt_SpeedyFast315mins",
            "bet_table": "bt_SpeedyFast315mins",
            "seconds_tbl": "1_5min"
        },
        "12": {
            "draw_table": "dt_LuckyFast33mins",
            "bet_table": "bt_LuckyFast33mins",
            "seconds_tbl": "3minstbl"
        },
        "13": {
            "draw_table": "dt_1kballPc281mins",
            "bet_table": "bt_1kballPc281mins"
        },
        "14": {
            "draw_table": "dt_SpeedyPc2815mins",
            "bet_table": "bt_SpeedyPc2815mins",
            "seconds_tbl": "1_5min"
        },
        "15": {
            "draw_table": "dt_Luckypc283mins",
            "bet_table": "bt_Luckypc283mins",
            "seconds_tbl": "3minstbl"
        },
        "16": {
            "draw_table": "dt_Lucky3D",
            "bet_table": "bt_Lucky3D",
            "seconds_tbl": "1k1min"
        },
        "17": {
            "draw_table": "dt_SpeedyPK1015min",
            "bet_table": "bt_SpeedyPK1015min",
            "seconds_tbl": "1k1min"
        },
        "23": {
            "draw_table": " dt_LuckyPK103m",
            "bet_table": "bt_LuckyPK103m",
            "seconds_tbl": "3minstbl"
        },
        "25": {
            "draw_table": "dt_rapidmark6",
            "bet_table": "bt_rapidmark6",
            "seconds_tbl": "1k1min"
        },
        "26": {
            "draw_table": "dt_mark65min",
            "bet_table": "bt_mark65min",
            "seconds_tbl": "5minstbl"
        },
        "27": {
            "draw_table": "dt_rapid11x5",
            "bet_table": "bt_rapid11x5",
            "seconds_tbl": "1k1min"
        },
        "28": {
            "draw_table": "dt_lucky11x55min",
            "bet_table": "bt_lucky11x55min",
            "seconds_tbl": "5minstbl"
        },
        "29": {
            "draw_table": "dt_rapidhappy8",
            "bet_table": "bt_rapidhappy8",
            "seconds_tbl": "1k1min"
        }
    }';
    
    return json_decode($json, true);
}

}