# A Magma Config Reader for PHP

## Example
```
obj
  prop1: value1
  prop2: value2

// types
bool: true
null: null
integer: 123
float: -.23
string: normal stuff

// Array
inline array -a: it is, comma separated\,
array -a
  Every Line is a item
  Cool right?
```

## Converts to PHP
```
return (object) [
  'obj' => (object) [
    'prop1' => 'value1',
    'prop2' => 'value2'
  ],
  'bool' => true,
  'null' => NULL,
  'integer' => 123,
  'float' => -.23,
  'string' => 'normal stuff',
  'inline array' => [
    'it is',
    'comma separated,'
  ],
  'array' => [
    'Every Line is item',
    'Cool right?'
  ]
];
```

## Usage
```
require_once( DIR. 'engine.php' );
$engine = new MagmaCfg\Engine( 'tmp/', true ); // debug reconverts every time

$cfg = $engine->go( 'cfg/test.mgcfg' );
```
