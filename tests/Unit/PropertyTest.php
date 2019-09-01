<?php

namespace Wikidata\Tests;

use Wikidata\Property;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;

class PropertyTest extends TestCase
{
  protected $dummy;

  protected $property;

  public function setUp(): void
  {
    $this->dummy = [
      'item' => 'http://www.wikidata.org/entity/Q11019',
      'itemLabel' => 'máquina',
      'itemDescription' => 'conjunto de elementos móviles y fijos orientados para realizar un trabajo determinado',
      'itemAltLabel' => 'maquina',
      'property' => 'http://www.wikidata.org/entity/P101',
      'propertyLabel' => 'campo de trabajo',
      'propertyValue' => 'ingeniería'
    ];

    $this->property = new Property($this->dummy);
  }

  public function testGetPropertyId()
  {
    $id = str_replace("http://www.wikidata.org/entity/", "", $this->dummy['property']);

    $this->assertEquals($id, $this->property->id);
  }

  public function testGetPropertyLabel()
  {
    $this->assertEquals($this->dummy['propertyLabel'], $this->property->label);
  }

  public function testGetPropertyValue()
  {
    $this->assertEquals($this->dummy['propertyValue'], $this->property->value);
  }
}
