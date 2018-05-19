<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;

/**
 * Thematics Controller
 *
 * @property \App\Model\Table\ThematicsTable $Thematics
 *
 * @method \App\Model\Entity\Thematic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThematicsController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['export']);
    }

    public function export($format = 'json')
    {
        $format = strtolower($format);
        // Format to view mapping
        $formats = [
            'xml' => 'Xml',
            'json' => 'Json',
        ];
        // Error on unknown type
        if (!isset($formats[$format])) {
            throw new NotFoundException(__('Unknown format.'));
        }
        // Set Out Format View
        $this->viewBuilder()->getClassName($formats[$format]);
        // Get data
        $thematics = $this->Thematics->find('all');
        // Set Data View
        $this->set(compact('thematics'));
        $this->set('_serialize', ['thematics']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $thematics = $this->paginate($this->Thematics);

        $this->set(compact('thematics'));
    }

    /**
     * View method
     *
     * @param string|null $id Thematic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thematic = $this->Thematics->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('thematic', $thematic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thematic = $this->Thematics->newEntity();
        if ($this->request->is('post')) {
            $thematic = $this->Thematics->patchEntity($thematic, $this->request->getData());
            if ($this->Thematics->save($thematic)) {
                $this->Flash->success(__('The thematic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thematic could not be saved. Please, try again.'));
        }
        $this->set(compact('thematic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Thematic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thematic = $this->Thematics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thematic = $this->Thematics->patchEntity($thematic, $this->request->getData());
            if ($this->Thematics->save($thematic)) {
                $this->Flash->success(__('The thematic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thematic could not be saved. Please, try again.'));
        }
        $this->set(compact('thematic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Thematic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thematic = $this->Thematics->get($id);
        if ($this->Thematics->delete($thematic)) {
            $this->Flash->success(__('The thematic has been deleted.'));
        } else {
            $this->Flash->error(__('The thematic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
