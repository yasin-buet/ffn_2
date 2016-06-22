<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 */
class NewsController extends AppController
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
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['Comments']
        ]);

        $this->set('news', $news);
        $this->set('_serialize', ['news']);
    }
}
