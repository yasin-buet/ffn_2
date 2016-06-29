<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 */
class PlayersController extends AppController
{
    public function isAuthorized($user)
    {
        if (in_array($this->request->action, ['index', 'view'])) {
            return true;
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['contain' => ['Teams']];
        $players = $this->paginate($this->Players);

        $this->set(compact('players'));
        $this->set('_serialize', ['players']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $player = $this->Players->get($id, ['contain' => ['Teams']]);

        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }
}
