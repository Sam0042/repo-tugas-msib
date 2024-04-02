<?php 
class Mahasiswa{
    // kumpulan variabel
    public $nama;
    public $nim;
    public $matakuliah;
    public $nilai;
    public $kuliah;

    // constructor
    public function __construct($nama,$nim,$matakuliah,$kuliah,$nilai) {
     $this->nama = $nama;
     $this->nim = $nim;
     $this->matakuliah = $matakuliah;
     $this->kuliah = $kuliah;
     $this->nilai = $nilai;
    }

    // kumpulan method
    public function getGrade(){
        if($this->nilai >=85 && $this->nilai <=100){
            return "A";
        }
        elseif($this->nilai >=70 && $this->nilai <85){
            return "B";
        }
        elseif($this->nilai >=55 && $this->nilai <70){
            return "C";
        }
        elseif($this->nilai >=40 && $this->nilai <55){
            return "D";
        }
        elseif($this->nilai <40){
            return "E";
        }

    }

    public function getPredikat(){
        if($this->nilai >=85 && $this->nilai <=100){
            return "Sangat Memuaskan";
        }
        elseif($this->nilai >=70 && $this->nilai <85){
            return "Memuaskan";
        }
        elseif($this->nilai >=55 && $this->nilai <70){
            return "Cukup";
        }
        elseif($this->nilai >=40 && $this->nilai <55){
            return "Kurang";
        }
        elseif($this->nilai <40){
            return "Buruk";
        }

    }

    public function getStatus(){
        $nilai = ($this->nilai>=65?"Lulus":"Tidak Lulus");
        return $nilai;
    }

}
?>