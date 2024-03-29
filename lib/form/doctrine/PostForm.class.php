<?php

/**
 * Post form.
 *
 * @package    mobilesite
 * @subpackage form
 * @author     Yuya Takeyama
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PostForm extends BasePostForm
{
  public function configure()
  {
    $this->useFields(array('id', 'title', 'body'));
  }
}
