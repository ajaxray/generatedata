<?php


class CSV extends ExportTypePlugin {
  protected $exportTypeName = "CSV";

  function generator($numResults, $columns, $data) {

  }

  function outputHeaders() {
	  header("Content-Type: application/csv");
	  header("Content-Disposition: attachment; filename=randomdata.csv");
	  header("Cache-Control: public");
  }
}