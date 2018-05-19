<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;

/**
 * EventTypes Controller
 *
 * @property \App\Model\Table\EventTypesTable $EventTypes
 *
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventTypesController extends AppController
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
        $eventTypes = $this->EventTypes->find('all');
        // Set Data View
        $this->set(compact('eventTypes'));
        $this->set('_serialize', ['eventTypes']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $eventTypes = $this->paginate($this->EventTypes);

        $this->set(compact('eventTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('eventType', $eventType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventType = $this->EventTypes->newEntity();
        if ($this->request->is('post')) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                $this->Flash->success(__('The event type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event type could not be saved. Please, try again.'));
        }
        $this->set(compact('eventType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                $this->Flash->success(__('The event type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event type could not be saved. Please, try again.'));
        }
        $this->set(compact('eventType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventType = $this->EventTypes->get($id);
        if ($this->EventTypes->delete($eventType)) {
            $this->Flash->success(__('The event type has been deleted.'));
        } else {
            $this->Flash->error(__('The event type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
