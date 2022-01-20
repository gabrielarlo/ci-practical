<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Sorts extends BaseController
{
  public function index()
  {
    $data['title'] = ucfirst('');

    echo view('templates/header', $data);
    echo view('sorts/index');
    echo view('templates/footer');
  }

  public function bubble()
  {
    $items = [25, 11, 96, 99, 50, 35];
    $data['items'] = implode(', ', $items);
    $data['passes'] = [];

    $swap = true;
    while ($swap) {
        $swap = false;
        $c = count($items) - 1;
        for ($i = 0; $i < $c; $i++) {
            if ($items[$i] > $items[$i + 1]) {
                list($items[$i], $items[$i + 1]) = [$items[$i + 1], $items[$i]];
                $swap = true;
            }
        }
        array_push($data['passes'], implode(' | ', $items));
    }

    $data['title'] = 'bubble';
    return $this->show('bubble', $data);
  }

  public function selection()
  {
    $items = [12, 5, 15, 90, 47, 35, 75, 22];
    $data['items'] = implode(', ', $items);
    $data['passes'] = [];

    $c = count($items);
    for ($i = 0; $i < $c - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $c; $j++) {
            if ($items[$j] < $items[$min]) {
                $min = $j;
            }
        }
        $items = $this->swapping($items, $i, $min);
        
        array_push($data['passes'], implode(' | ', $items));
    }

    $data['title'] = 'selection';
    return $this->show('selection', $data);
  }

  private function show($page = 'index', $data)
  {
    if (!is_file(APPPATH . 'Views/sorts/' . $page . '.php')) {
      throw new PageNotFoundException($page);
    }

    $data['title'] = '- ' . ucfirst($data['title']);

    echo view('templates/header', $data);
    echo view('sorts/' . $page);
    echo view('templates/footer');
  }

  private function swapping($item, $left, $right)
  {
      $old_right_value = $item[$right];
      $item[$right] = $item[$left];
      $item[$left] = $old_right_value;
      return $item;
  }
}