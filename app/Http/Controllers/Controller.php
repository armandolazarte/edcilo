<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


    /*
     * Referencia del archivo, nombre del archivo y ruta donde se guardara el archivo
     */
    public function moveFile($file, $destination, $name)
    {
        $file_name = $name . "." . $file->getClientOriginalExtension();

        $file->move($destination, $file_name);

        return $destination . $file_name;
    }

}
