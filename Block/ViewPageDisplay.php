<?php

namespace Suraj\Test\Block;
use Magento\Backend\Model\Auth\Session;
use Magento\Framework\App\Http\Context as AuthContext;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ViewPageDisplay extends Template
{

    protected $_data;
    /**Aut
     * MyObserver constructor.
     * @param Session $session
     * @param AuthContext $auth
     */
    protected $session;
    protected $auth;

  public function __construct(Context $context,Session $session,AuthContext $auth, array $data = [])
  {
        parent::__construct($context, $data);
        $this->auth = $auth;
        $this->session = $session;
    }

    public function getCustomerData()
    {
         return $this->session->getUser();
    }
}
