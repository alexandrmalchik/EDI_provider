<?php

namespace App\Http\Controllers;

use App\File as FileModel;
use Illuminate\Http\Request;
use Spatie\ArrayToXml\ArrayToXml;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class IndexController extends Controller
{
    public function list() {
        $files = FileModel::all();

        return view('index')->with(['files' => $files]);
    }

    public function show(File $file) {
        return view('welcome')->with(['file' => $file]);
    }

    public function create() {
        return view('create_file');
    }

    public function store(Request $request) {
        $data = [];
        foreach ($request->all() as $key => $item) {
            if ($key != '_token' && $key != 'name') {
                $data['DeliveryNote'][$key] = $item;
            }
        }

        $file = new FileModel();
        $file->name = $request->get('name');
        $file->data = $data;
        $file->save();

        return redirect('/')->with(['message' => 'File created.']);
    }

    public function generateXml(FileModel $file) {
        $result = ArrayToXml::convert($file->data, 'BLRWBL', true, 'UTF-8');

        Storage::put('file'.$file->id.'.xml', $result);

        return Storage::download('file'.$file->id.'.xml');
    }

    public function generateDocx(FileModel $file) {
        $word = new PhpWord();

        $section = $word->addSection();

        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setBold(true);
        $fontStyle->setName('Arial');
        $fontStyle->setSize(22);
        $fontStyle->setPosition('center');
        $myTextElement = $section->addText($file->name);
        $myTextElement->setFontStyle($fontStyle);

        foreach ($file->data['DeliveryNote'] as $key => $value) {
            $section->addText($key . ': '. $value, array('name' => 'Times New Roman', 'size' => 12, 'bold' => true));
        }

        $writer = IOFactory::createWriter($word, 'Word2007');
        $writer->save('../storage/app/file'.$file->id.'.docx');

        return Storage::download('file'.$file->id.'.docx');
    }
}
