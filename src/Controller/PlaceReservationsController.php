<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;

/**
 * PlaceReservations Controller
 *
 * @property \App\Model\Table\PlaceReservationsTable $PlaceReservations
 *
 * @method \App\Model\Entity\PlaceReservation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaceReservationsController extends AppController
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
        $placeReservations = $this->PlaceReservations->find('all');
        // Set Data View
        $this->set(compact('placeReservations'));
        $this->set('_serialize', ['placeReservations']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Places']
        ];
        $placeReservations = $this->paginate($this->PlaceReservations);

        $this->set(compact('placeReservations'));
    }

    /**
     * View method
     *
     * @param string|null $id Place Reservation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $placeReservation = $this->PlaceReservations->get($id, [
            'contain' => ['Places', 'Events']
        ]);

        $this->set('placeReservation', $placeReservation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $placeReservation = $this->PlaceReservations->newEntity();
        if ($this->request->is('post')) {
            $placeReservation = $this->PlaceReservations->patchEntity($placeReservation, $this->request->getData());
            if ($this->PlaceReservations->save($placeReservation)) {
                $this->Flash->success(__('The place reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place reservation could not be saved. Please, try again.'));
        }
        $places = $this->PlaceReservations->Places->find('list', ['limit' => 200]);
        $this->set(compact('placeReservation', 'places'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Place Reservation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $placeReservation = $this->PlaceReservations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $placeReservation = $this->PlaceReservations->patchEntity($placeReservation, $this->request->getData());
            if ($this->PlaceReservations->save($placeReservation)) {
                $this->Flash->success(__('The place reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place reservation could not be saved. Please, try again.'));
        }
        $places = $this->PlaceReservations->Places->find('list', ['limit' => 200]);
        $this->set(compact('placeReservation', 'places'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Place Reservation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $placeReservation = $this->PlaceReservations->get($id);
        if ($this->PlaceReservations->delete($placeReservation)) {
            $this->Flash->success(__('The place reservation has been deleted.'));
        } else {
            $this->Flash->error(__('The place reservation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
