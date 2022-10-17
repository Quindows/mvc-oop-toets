<?php

class RichestPeoples extends Controller{

    private $richestPeopleModel;
    
    public function __construct()
    {
        $this->richestPeopleModel = $this->model('RichestPeople');
    }

    public function index(){
        $records = $this->richestPeopleModel->getRichestPeople();

        $rows = '';

        foreach($records as $value){
            $rows .= "
            <tr>
                <td>$value->Naam</td>
                <td>$value->Vermogen</td>
                <td>$value->Leeftijd</td>
                <td>$value->Bedrijf</td>
                <td><a href='". URLROOT . "/RichestPeoples/delete/$value->id'>delete</td>
            </tr>";
        }

        $data = [
            'title' => "De vijf rijkste mensen ter wereld",
            'rows' => $rows
        ];

        $this->view('richestpeople/index', $data);
    }

    public function delete($id){
        $this->richestPeopleModel->deleteRichestPerson($id);
        header("Location: " . URLROOT . "/richestPeople/index");
    }
}