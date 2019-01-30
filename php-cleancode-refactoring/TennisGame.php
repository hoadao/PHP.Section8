<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 30/01/2019
 * Time: 14:26
 */

class TennisGame
{
    const LOVE = 0;
    const FIFTEEN = 1;
    const THIRTY = 2;
    const FORTY = 3;
    public $result = '';
    function deuce($distinctPoint){
        switch ($distinctPoint) {
            case 0:
                $this->result = "FUCKING DEUCE";
                break;
            case 1:
                $this->result = "Advantage player 1";
                break;
            case -1:
                $this->result = "Advantage player 2";
                break;
            case 2:
                $this->result = "Win for player 1";
                break;
            case -2:
                $this->result = "Win for player 2";
                break;
            default:
                $this->result = "False Score";
        return $this->result;
        }
    }
    function draw($player1Result){
        switch ($player1Result) {
            case self::LOVE:
                $this->result = "Love-All";
                break;
            case self::FIFTEEN:
                $this->result = "Fifteen-All";
                break;
            case self::THIRTY:
                $this->result = "Thirty-All";
                break;
            case self::FORTY:
                $this->result = "Forty-All";
                break;
        }
        return $this->result;
    }
    function readPoint($point){
        switch ($point){
            case self::LOVE:
                return "Love";
            case self::FIFTEEN:
                return "Fifteen";
            case self::THIRTY:
                return "Thirty";
            case self::FORTY:
                return "Forty";
        }
    }
    public function getResult($player1Result, $player2Result)
    {   
        $distinctPoint = $player1Result - $player2Result;
        if ($player1Result < 4 && $player2Result <4) {
            if($distinctPoint == 0) {
                return $this->draw($player1Result);
            }
            else{
                $this->result = $this->readPoint($player1Result)."-".$this->readPoint($player2Result);
                return $this->result;
            }
        }
        else if($player1Result == 4 && $player2Result < 3){
            $this->result = "Easy Win For Player 1";
            return $this->result;
        }
        else if($player1Result < 3 && $player2Result = 4){
            $this->result = "Easy win for Player 2";
            return $this->result;
        }
        else
        {

            return $this->deuce($distinctPoint);
        }





    }
    public function __toString()
    {
        return $this->result;
    }
}