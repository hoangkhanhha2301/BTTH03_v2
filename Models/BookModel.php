<?php
    class BookModel{
        private $id;
        private $tenSach;
        private $namXuatBan;
        private $idTacGia;

        public function __construct($tenSach, $namXuatBan, $idTacGia){
            $this->tenSach = $tenSach;
            $this->namXuatBan = $namXuatBan;
            $this->idTacGia = $idTacGia;
        }
        
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        
        public function getTenSach(){
            return $this->tenSach;
        }
        
        public function setTenSach($tenSach){
            $this->tenSach = $tenSach;
        }
        
        public function getNamXuatBan(){
            return $this->namXuatBan;
        }
        
        public function setNamXuatBan($namXuatBan){
            $this->namXuatBan = $namXuatBan;
        }
        
        public function getIdTacGia(){
            return $this->idTacGia;
        }
        
        public function setIdTacGia($idTacGia){
            $this->idTacGia = $idTacGia;
        }
    }
?>