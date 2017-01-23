<?php
class Buildings {
// id=> номер, name=имя   
    private $buildings;
    
    public function __construct(){
//        Получаем названия режем пробелы и перводы строк
        $buildings = file('Buildings_list.txt');
        foreach($buildings as $key => $building){
            $this->buildings[] = trim($building);
        }
    }
    
    public function addBuilding($build_name){
        $this->buildings[] = $build_name;
        $this->rewrite();
    }
    
    public function delBuilding($id_build){
        unset($this->buildings[$id_build]);
        $this->rewrite();
    }
    
    public function editBuilding($id_build, $newName){
        $this->buildings[$id_build] = $newName;
        $this->rewrite();
    }
    
    public function buildingList(){
        return $this->buildings;
    }
    
    public function rewrite(){
        $file = fopen('Buildings_list.txt', 'w');
        foreach($this->buildings as $key => $build){
            fwrite($file, "$build\n");
        }
        fclose($file);
    }
}
