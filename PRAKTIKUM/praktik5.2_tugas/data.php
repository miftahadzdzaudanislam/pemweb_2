<?php
    class Youtuber {
        private $nama;
        private $subs;
        private $kategori;

        public function __construct($name, $sub, $kat){
            $this->nama = $name;
            $this->subs = $sub;
            $this->kategori = $kat;
        }

        public function getNama(){
            return $this->nama;
        }

        public function getSubs(){
            return $this->subs;
        }

        public function getKategori(){
            return $this->kategori;
        }

        public function playButton(){
            if ($this->subs >= 10000000){
                return "Diamond";
            }elseif ($this->subs >= 1000000){
                return "Gold";
            }elseif ($this->subs >= 100000){
                return "Silver";
            }else {
                return "Belum punya";
            }
        }

        public function kategori(){
            if ($this->kategori == "stream"){
                return "Streamer";
            }elseif ($this->kategori == "game"){
                return "Gamer";
            }elseif ($this->kategori == "vtuber"){
                return "Virtual Youtuber";
            }
        }

    }
?>