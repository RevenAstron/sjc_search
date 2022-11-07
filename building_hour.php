<?php

            if($time >= '0830' && $time <= '0925'){
                $hour=1;
                $shift=1;
            }
            else if($time >= '0726' && $time <= '0820'){
                $hour=2;
                $shift=1;
            }
            else if($time >= '1021' && $time <= '1115'){
                $hour=3;
                $shift=1;
            }
            else if($time >= '1116' && $time <= '1129'){
                $hour=0;
                $shift=1;
            }
            else if($time >= '1130' && $time <= '2225'){
                $hour=4;
                $shift=1;
            }
            else if($time >= '1226' && $time <= '1320'){
                $hour=5;
                $shift=1;
            }
            else if($time >= '1345' && $time <= '1440'){
                $hour=1;
                $shift=2;
            }
            else if($time >= '1441' && $time <= '1535'){
                $hour=2;
                $shift=2;
            }
            else if($time >= '1536' && $time <= '1630'){
                $hour=3;
                $shift=2;
            }
            else if($time >= '1631' && $time <= '1644'){
                $hour=0;
                $shift=2;
            }
            else if($time >= '1645' && $time <= '1740'){
                $hour=4;
                $shift=2;
            }
            else if($time >= '1741' && $time <= '1835'){
                $hour=5;
                $shift=2;
            } else {
                echo "hour error";
            }

?>