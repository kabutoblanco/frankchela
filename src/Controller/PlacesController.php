<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

/**
 * Places Controller
 *
 * @property \App\Model\Table\PlacesTable $Places
 *
 * @method \App\Model\Entity\Place[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlacesController extends AppController
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
        $this->Auth->allow(['export', 'innerjoin']);
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
        $places = $this->Places->find('all');
        // Set Data View
        $this->set(compact('places'));
        $this->set('_serialize', ['places']);
    }

    public function innerjoin($format = 'json')
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
        $connection = ConnectionManager::get('default');
        $reservations = $connection->execute('SELECT places.id, started, place_reservations.active,  image, size, time_open, time_close FROM place_reservations RIGHT JOIN places ON place_reservations.place_id = places.id')->fetchAll('assoc');
        // Set Data View
        $this->set(compact('reservations'));
        $this->set('_serialize', ['reservations']);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $places = $this->paginate($this->Places);

        $this->set(compact('places'));
    }

    /**
     * View method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => ['PlaceReservations']
        ]);

        $this->set('place', $place);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $place = $this->Places->newEntity();
        if ($this->request->is('post')) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $this->set(compact('place'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $this->set(compact('place'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $place = $this->Places->get($id);
        if ($this->Places->delete($place)) {
            $this->Flash->success(__('The place has been deleted.'));
        } else {
            $this->Flash->error(__('The place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
