<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);
require_once "application/models/Movie.php";

class ImporModel extends ModelAbstract {

    public function fileImport($path) {
        $movies = $this->createMoviesFromFile($path);
        return $this->service->addMovies($movies);
    }

    private function createMoviesFromFile($path) {
        $fileText = $this->extractDocxText($path);
        $lines = explode("\n\r", $fileText);

        function get_value($str) {
            $posDelemeter = strpos($str, ": ");
            return substr($str, $posDelemeter + 2);
        }

        $modelStarted = false;
        $movies = [];
        $movie = [];

        foreach ($lines as $line) {
            if (strpos($line, "Title") !== false) {
                $modelStarted = true;
                $movie[0] = "";
                $movie[1] = get_value($line);
            } else if ($modelStarted) {
                if (strpos($line, "Release Year") !== false) {
                    $movie[2] = get_value($line);
                } else if (strpos($line, "Format") !== false) {
                    $movie[3] = get_value($line);
                } else if (strpos($line, "Stars") !== false) {
                    $movie[4] = get_value($line);
                }

                if (count($movie) === 5) {
                    $modelStarted = false;
                    $movies[] = $this->service->createMovieFromRawData($movie);
                    $movie = [];
                }
            } else {
                continue;
            }
        }
        return $movies;
    }

    private function extractDocxText($url) {
        $docx = fopen($url, 'r');
        file_put_contents("tempf.docx",$docx);
        $xml_filename = "word/document.xml";
        $zip_handle = new ZipArchive;
        $output_text = "";
        if (true === $zip_handle->open("tempf.docx")) {
            if (($xml_index = $zip_handle->locateName($xml_filename)) !== false) {
                $xml_datas = $zip_handle->getFromIndex($xml_index);
                $replace_newlines = preg_replace('/<w:p w[0-9-Za-z]+:[a-zA-Z0-9]+="[a-zA-z"0-9 :="]+">/',"\n\r",$xml_datas);
                $replace_tableRows = preg_replace('/<w:tr>/',"",$replace_newlines);
                $replace_tab = preg_replace('/<w:tab\/>/',"",$replace_tableRows);
                $replace_paragraphs = preg_replace('/<\/w:p>/',"\n\r",$replace_tab);
                $replace_other_Tags = strip_tags($replace_paragraphs);
                $output_text = $replace_other_Tags;
            }
            $zip_handle->close();
        }
        chmod("tempf.docx", 0777);
        unlink(realpath("tempf.docx"));
        return $output_text;
    }
}
