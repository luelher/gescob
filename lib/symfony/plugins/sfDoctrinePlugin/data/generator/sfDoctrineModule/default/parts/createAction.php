  public function executeCreate(sfWebRequest $request)
  {
<?php if (isset($this->params['with_doctrine_route']) && $this->params['with_doctrine_route']): ?>
<?php else: ?>
    $this->forward404Unless($request->isMethod('post'));

<?php endif; ?>
    $this->form = new <?php echo $this->getModelClass().'Form' ?>();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
