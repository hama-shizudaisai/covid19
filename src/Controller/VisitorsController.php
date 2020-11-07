<?php
declare(strict_types=1);



namespace App\Controller;

use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorHTML;

/**
 * Visitors Controller
 *
 * @property \App\Model\Table\VisitorsTable $Visitors
 * @method \App\Model\Entity\Visitor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        return $this->select();
        $visitors = $this->paginate($this->Visitors);

        $this->set(compact('visitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Visitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitor = $this->Visitors->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('visitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitor = $this->Visitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $visitor = $this->Visitors->patchEntity($visitor, $this->request->getData());
            if ($this->Visitors->save($visitor)) {
                $this->Flash->success(__('The visitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitor could not be saved. Please, try again.'));
        }
        $this->set(compact('visitor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitor = $this->Visitors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitor = $this->Visitors->patchEntity($visitor, $this->request->getData());
            if ($this->Visitors->save($visitor)) {
                $this->Flash->success(__('The visitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitor could not be saved. Please, try again.'));
        }
        $this->set(compact('visitor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visitor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitor = $this->Visitors->get($id);
        if ($this->Visitors->delete($visitor)) {
            $this->Flash->success(__('The visitor has been deleted.'));
        } else {
            $this->Flash->error(__('The visitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function regist($type="")
    {
        $QUESTION_COUNT=6;
        $visitor = $this->Visitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $visitor = $this->Visitors->patchEntity($visitor, $this->request->getData());
            $is_all_agreed=true;
            for ($i=1; $i <=$QUESTION_COUNT ; $i++) {
                if ($visitor['q'.$i]==="0") {
                    $is_all_agreed=false;
                }
            }
            if (!$is_all_agreed) {
                return $this->redirect(['action' => 'failed']);
            }
            //ユニークIDを生成
            $visitor['id']=hash('fnv132', ''.time()).date("d");
            if ($this->Visitors->save($visitor)) {
                // $this->Flash->success(__('The visitor has been saved.'));
                return $this->redirect(['action' => 'success',$visitor['id']]);
            }
            $this->Flash->error(__('登録内容が不正です'));
        }
        $this->set(compact('visitor', 'type'));
    }

    public function select()
    {
    }

    public function success($id = null)
    {
        // require 'vendor/autoload.php';
        $color = [0, 0, 0];
        // $generator = new BarcodeGeneratorJPG();
        // file_put_contents('/web/'.$id.'.jpg', $generator->getBarcode($id, $generator::TYPE_CODE_128, 3, 60, $color));
        $generator = new BarcodeGeneratorHTML();
        $this->set(['id'=>$id,'barcode'=>$generator->getBarcode($id, $generator::TYPE_CODE_128, 2, 50, 'black')]);
    }

    public function failed()
    {
    }
}
