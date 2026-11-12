<?php
$toDoLists = [
       [
           'id' => 1,
           'titre' => 'Build HTML structure',
           'description' => 'Create the main layout for the home page',
           'date_limite' => '2026-11-15',
           'priorite' => 'Haute',
           'terminee' => true,
       ],
       [
           'id' => 2,
           'titre' => 'Style the navigation bar',
           'description' => 'Add colors and spacing to the navigation',
           'date_limite' => '2026-11-16',
           'priorite' => 'Moyenne',
           'terminee' => false,
       ],
       [
           'id' => 3,
           'titre' => 'Create the task list',
           'description' => 'Display tasks as individual cards',
           'date_limite' => '2026-11-17',
           'priorite' => 'Haute',
           'terminee' => true,
       ],
       [
           'id' => 4,
           'titre' => 'Add completion indicators',
           'description' => 'Show whether each task is complete',
           'date_limite' => '2026-11-18',
           'priorite' => 'Basse',
           'terminee' => false,
       ],
       [
           'id' => 5,
           'titre' => 'Build the statistics section',
           'description' => 'Show totals for completed and pending tasks',
           'date_limite' => '2026-11-19',
           'priorite' => 'Moyenne',
           'terminee' => true,
       ],
       [
           'id' => 6,
           'titre' => 'Make the page responsive',
           'description' => 'Adjust the layout for mobile screens',
           'date_limite' => '2026-11-20',
           'priorite' => 'Haute',
           'terminee' => false,
       ],
       [
           'id' => 7,
           'titre' => 'Add task filtering',
           'description' => 'Allow tasks to be filtered by status',
           'date_limite' => '2026-11-21',
           'priorite' => 'Basse',
           'terminee' => false,
       ],
       [
           'id' => 8,
           'titre' => 'Test the todo list',
           'description' => 'Check the page for layout and display issues',
           'date_limite' => '2026-11-22',
           'priorite' => 'Moyenne',
           'terminee' => false,
       ],
   ];

   $totalTasks = count($toDoLists);
   $terminees =0;
 

   foreach($toDoLists as $task){
        if($task['terminee'] === true){
                $terminees++;
        };
   };

   $nonTerminees = $totalTasks - $terminees;

require("template-index.php");