<?php

/**
 * sfWidgetFormGrid represents a date widget.
 *
 * @package    symfony
 * @subpackage widget
 * @author     Luis Hernández
 * @version    SVN: $Id: sfWidgetFormDate.class.php 16259 2009-03-12 11:42:00Z fabien $
 */
class sfWidgetFormGrid extends sfWidgetForm
{


  public function __construct($options = array(), $attributes = array())
  {
    $this->addOption('config', array());
    $this->addOption('per', array());
    parent::__construct($options, $attributes);
  }

  /**
   * Configures the current widget.
   *
   * Available options:
   *
   *  * config:       Confguración del Grid
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    if(isset ($options['config'])) $this->setOption('config', $options['config']);
    if(isset ($options['per'])) $this->setOption('per', $options['per']);
  }

  /**
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {

    $grid = Herramientas::getConfigGrid($this->getOption('config'),$this->getOption('per'));

    return grid_tag_v2($grid);
    
  }
}
