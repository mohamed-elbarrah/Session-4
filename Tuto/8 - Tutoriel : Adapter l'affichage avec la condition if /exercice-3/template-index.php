<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Todo List</title>
</head>
<body>
        <!-- top page -->
        <section class="hero-top container">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2680E8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check preview-icon"><path d="M8 2v3"/><path d="M16 2v3"/><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="m9 15 2 2 4-4"/></svg>
                <div>  
                  <h1>Ma Todo List</h1>
                  <p>Cree et suivez vous taches quotidience</p>
                </div>
        </section>

        <!-- statistic cards -->
        <section class="statistic-cards container">
                <card class="first-statistique">
                        <h5>Total</h5>
                        <h1><?= $totalTasks?><p>taches</p></h1>
                </card>

                <card class="second-statistique">
                        <h5>Terminees</h5>
                        <h1><?= $terminees?><p>taches</p></h1>
                </card>

                <card class="third-statistique">
                        <h5>Non terminees</h5>
                        <h1><?= $nonTerminees?><p>taches</p></h1>
                </card>
        </section>

        <!-- todo lists -->
         <section class="todo-section container">
                <div class="todo-top">
                        <h3>List des taches</h3>
                        <hr>
                </div>

                <!-- card 1 -->
                 <?php foreach($toDoLists as $task): ?>
                <div class="todo-card  <?=$task['terminee']==true? "terminee": ""?>">
                        <div class="todo-content">
                                <input class="check-btn" type="checkbox" <?=$task['terminee']==true? 'checked': "" ?> >
                                <div>
                                        <h4 class="titre"> <?=$task['titre']?> </h4>
                                        <p class="description"> <?=$task['description']?> </p>
                                </div>
                        </div>
                        <div class="priorite-date-group">
                                <div class=" priorite  <?=$task['priorite'] === 'Haute' ? 'Haute':($task['priorite'] === 'Moyenne'? 'Moyenne':($task['priorite'] === 'Basse'? 'Basse':'')) ?>" > <?=$task['priorite']?></div>
                                <div class="date_limite">
                                        <p><?=$task['date_limite'] ?></p>
                                </div>
                        </div>
                </div>
                <?php endforeach ; ?>

 
         </section>
</body>
</html>