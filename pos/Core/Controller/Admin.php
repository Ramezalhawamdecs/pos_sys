<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Model\User;
use Core\Model\Selling;
use Core\Model\Item;

class Admin extends Controller
{
        public function render()
        {
                if (!empty($this->view))
                        $this->view();
        }

        function __construct()
        {
                $this->auth();
                $this->admin_view(true);
        }

        public function index()
        {
               
                $this->view = 'dashboard';
                

                $user = new User;

                //*NEW ITEM MODEL

                $item = new Item;
                $this->data['users'] = $user->get_all();

                $this->data['users_count'] = count($user->get_all());
                $this->data['items'] = $item->get_all();
                $this->data['items_count'] = count($item->get_all());
                $selling= new Selling;
                $this->data['total_transaction']=count($selling->get_all());

 

                $total_sales = 0;
                $total_sales_of_transaction = $selling->get_all();
                foreach ( $total_sales_of_transaction as $sales) {
                    $total_sales += $sales->total;
                }
                $this->data['total_sales'] = $total_sales;

                $top_five_expensive = array();
                $stmt = $selling->connection->prepare("SELECT * FROM sellings ORDER BY selling_price DESC LIMIT 5");
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) {
                        $top_five_expensive[] = $row;
                    }
                }


                $this->data['top_five']=$top_five_expensive;


                
                

        
                
        }
}
