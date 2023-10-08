<?php

    class AuthorModel{
        private $id;
        private $tenTacGia;
    

        public function __construct($id, $tenTacGia){
            $this->id = $id;
            $this->tenTacGia = $tenTacGia;
        }

        public function getId(){
            return $this->id;
        }

        public function getTenBaiHat() {
            return $this->tenTacGia;
        }
    }
