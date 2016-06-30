<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Teams Controller
 *
 * @property \App\Model\Table\TeamsTable $Teams
 */
class TeamsController extends AppController
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
        $this->paginate = ['contain' => ['Countries', 'Continents']];
        $teams = $this->paginate($this->Teams);
        if ($this->request->is('post')) {
            $query = TableRegistry::get('Teams')->find();
            $query->where(['Countries.name LIKE' => '%' . $this->request->data['keyword'] . '%'])
                ->orWhere(['Continents.name LIKE' => '%' . $this->request->data['keyword'] . '%']);
            $teams = $this->paginate($query);
        }

        $this->set(compact('teams'));
    }

    /**
     * View method
     *
     * @param string|null $id Team id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => ['Countries', 'Continents', 'Players']
        ]);

        $this->set('team', $team);
        $this->set('_serialize', ['team']);
    }
}
