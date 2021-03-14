<?php


class Controller
{
    private $_A_url;

    private $_A_urlParameters;

    private $_A_parameters;

    public function __construct ($S_url, $A_parameters)
    {
        if ('/' == substr($S_url, -1, 1)) {
            $S_url = substr($S_url, 0, strlen($S_url) - 1);
        }

        $A_url = explode('/', $S_url);

        if (empty($A_url[0])) {
            $A_url[0] = 'DefaultController';
        } else {
            $A_url[0] = 'Controller' . ucfirst($A_url[0]);
        }

        if (empty($A_url[1])) {
            $A_url[1] = 'defaultAction';
        } else {
            $A_url[1] = $A_url[1] . 'Action';
        }

        if (empty($S_controller)) {
            $this->_A_url['controller'] = 'DefaultController';
        } else {
            $this->_A_url['controller'] = 'Controller' . ucfirst($S_controller);
        }

        if (empty($S_action)) {
            $this->_A_url['action'] = 'defaultAction';
        } else {
            $this->_A_url['action']  = $S_action . 'Action';
        }

        $this->_A_url['controller'] = array_shift($A_url);
        $this->_A_url['action']     = array_shift($A_url);

        $this->_A_urlParameters = $A_url;

        $this->_A_parameters = $A_parameters;

    }


    public function execute()
    {
        if (!class_exists($this->_A_url['controller'])) {
            throw new ControllerException($this->_A_url['controller'] . " n'est pas un controleur valide.");
        }

        if (!method_exists($this->_A_url['controller'], $this->_A_url['action'])) {
            throw new ControllerException($this->_A_url['action'] . " du contrôleur " .
                $this->_A_url['controller'] . " n'est pas une action valide.");
        }

        $B_called = call_user_func_array(array(new $this->_A_url['controller'],
            $this->_A_url['action']), array($this->_A_urlParameters, $this->_A_parameters ));

        if (false === $B_called) {
            throw new ControllerException("L'action " . $this->_A_url['action'] .
                " du contrôleur " . $this->_A_url['controller'] . " a rencontré une erreur.");
        }
    }

}