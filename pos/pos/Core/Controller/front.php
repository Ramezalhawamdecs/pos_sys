<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Model\item;
use Core\Model\Tag;
use Core\Model\User;
use DateTime;

class Front extends Controller
{
    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->admin_view(false);
    }

    /**
     * List all news
     *
     * @return void
     */
    public function index()
    {
        $this->view = 'home';
        $item = new item();
        $this->data['items'] = $item->get_all();
    }

    public function single()
    {
        $this->view = 'single';
        $item = new item();
        $selected_item = $item->get_by_id($_GET['id']); // get the item data (including the user_id)
        $user = new User(); // get the user model to get the author info
        $author = $user->get_by_id($selected_item->user_id); // get the author by using the user_id in the $selected_item
        $selected_item->author = !empty($author) ? $author->display_name : null; // check if we got a user withe the provided user_id

        $date = new \DateTime($selected_item->created_at);
        $selected_item->created_at = $date->format('d/m/Y');

        // get tags related to the current item
        $tag = new Tag();
        // get related tags (Should be implemented in the Tag Model)
        $sql = "SELECT * FROM items_tags WHERE item_id={$_GET['id']}";
        $tags_query = $tag->connection->query($sql); // get data from mysql
        $item_tags_relations = array(); // create container (Array) for the relations
        if ($tags_query->num_rows > 0) { // fill out the relations container
            while ($row = $tags_query->fetch_object()) {
                $item_tags_relations[] = $row;
            }
        }

        // get the tags by id from the tags table
        $tags = array();
        foreach ($item_tags_relations as $relation) {
            $tags[] = $tag->get_by_id($relation->tag_id);
        }

        // get the unique tags. 
        $final_tags = array();
        foreach ($tags as $tag) {
            if (!in_array($tag->name, $final_tags)) {
                $final_tags[$tag->id] = $tag->name;
            }
        }

        // escape XSS attacks
        $selected_item->content = \htmlspecialchars($selected_item->content);

        $selected_item->tags = $final_tags;
        $this->data['item'] = $selected_item;
    }

   // function test_ajax()
  //  {
   //     $this->view = "test_ajax";
 //   }

}
